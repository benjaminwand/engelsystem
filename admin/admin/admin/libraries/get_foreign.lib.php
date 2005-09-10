<?php
/* $Id: get_foreign.lib.php,v 1.4 2002/10/23 04:17:26 robbat2 Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:


/**
 * Gets foreign keys in preparation for a drop-down selector
 * Thanks to <markus@noga.de>
 */

// lem9
//if (!defined('PMA_GET_FOREIGN_LIB_INCLUDED')) {
//    define('PMA_GET_FOREIGN_LIB_INCLUDED', 1);

    // lem9: we always show the foreign field in the drop-down; if a display
    // field is defined, we show it besides the foreign field
    if ($foreigners && isset($foreigners[$field])) {
        $foreigner       = $foreigners[$field];
        $foreign_db      = $foreigner['foreign_db'];
        $foreign_table   = $foreigner['foreign_table'];
        $foreign_field   = $foreigner['foreign_field'];

        // Count number of rows in the foreign table. Currently we do
        // not use a drop-down if more than 200 rows in the foreign table,
        // for speed reasons and because we need a better interface for this.
        //
        // We could also do the SELECT anyway, with a LIMIT, and ensure that
        // the current value of the field is one of the choices.

        $count_query  = 'SELECT COUNT(*) AS total FROM ' . PMA_backquote($foreign_db) . '.' . PMA_backquote($foreign_table);
        $count_result = PMA_mysql_query($count_query) or PMA_mysqlDie('', $count_query, '', $err_url);
        $the_total    = PMA_mysql_result($count_result, 0, 'total');
        mysql_free_result($count_result);

        if ($the_total < 200) {
            // foreign_display can be FALSE if no display field defined:
            $foreign_display = PMA_getDisplayField($foreign_db, $foreign_table);
            $dispsql         = 'SELECT ' . PMA_backquote($foreign_field)
                             . (($foreign_display == FALSE) ? '' : ', ' . PMA_backquote($foreign_display))
                             . ' FROM ' . PMA_backquote($foreign_db) . '.' . PMA_backquote($foreign_table)
                             . ' ORDER BY ' . PMA_backquote($foreign_table) . '.' . PMA_backquote($foreign_display);
            $disp            = PMA_mysql_query($dispsql);
        }
    } // end if $foreigners

//} // $__PMA_GET_FOREIGN_LIB_INCLUDED__
?>
