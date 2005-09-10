<?php
/* $Id: estonian-iso-8859-1.inc.php,v 1.35 2002/12/03 22:29:03 rabus Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Baiti', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('P�h', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'M�r', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';

$strAPrimaryKey = 'Primaarne v�ti lisati %s';
$strAccessDenied = 'Ligip��s keelatud';
$strAction = 'Tegevus';
$strAddDeleteColumn = 'Lisa/Kustuta v�lja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddNewField = 'Lisa uus v�li';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("where" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida(ead)';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAffectedRows = 'M�jutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa j�rgmine uus rida';
$strAll = 'K�ik';
$strAllTableSameWidth = 'kuva k�ik tabelid sama laiusega?';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnIndex = 'Indeks lisati %s';
$strAnalyzeTable = 'Anal��si tabelit';
$strAnd = 'ja';
$strAny = 'k�ik';
$strAnyColumn = 'K�ik v�ljad';
$strAnyDatabase = 'K�ik andmebaasid';
$strAnyHost = 'K�ik masinad';
$strAnyTable = 'K�ik tabelid';
$strAnyUser = 'K�ik kasutajad';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli l�ppu';
$strAttr = 'Parameetrid';

$strBack = 'Tagasi';
$strBeginCut = 'ALUSTA L�IGET';
$strBeginRaw = 'ALUSTA PUHAST';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - �rge muutke';
$strBookmarkDeleted = 'M�rgistus kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'M�rgistatud SQL p�ring';
$strBookmarkThis = 'M�rgista see SQL p�ring';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBzip = '"bzipitud"';

$strCantLoadMySQL = 'ei suutnud lugeda MySql laiendit,<br />palun kontrollige PHP konfiguratsiooni.';
$strCantLoadRecodeIconv = 'Ei suuda lugeda iconv v�i recode moodulit mida on vaja t�hetabeli konvertimiseks, konfigureeriga php-d nii, et see sisaldaks antud mooduleid v�i keelake t�hetabeli konvertimine phpMyAdminis.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCantUseRecodeIconv = 'Ei suuda kasutada iconv-d v�i libiconvi v�i recode_string funktsiooni kuigi moodul on installitud Kontrollige oma php konfiguratsiooni.';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strChange = 'Muuda';
$strChangeDisplay = 'Vali v�li mida kuvada';
$strChangePassword = 'Muuda parooli';
$strCharsetOfFile = 'Faili t�hekodeering:';
$strCheckAll = 'M�rgista k�ik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckTable = 'Kontrolli tabelit';
$strChoosePage = 'Palun valige leht muutmiseks';
$strColComFeat = 'N�itan veeru kommentaare';
$strColumn = 'V�li';
$strColumnNames = 'V�ljade nimed';
$strComments = 'Kommentaarid';
$strCompleteInserts = 'T�ispikk INSERT';
$strCompression = 'Pakkimine';
$strConfigFileError = 'phpMyAdmin ei suutnud lugeda Teie konfiguratsioonifaili!<br />See v�ib juhtuda kui PHP leiab vea selles v�i PHP ei leia antud faili �les.<br />Palun kutsuga konfiguratsioonifail v�lja otseselt kasutades linki allpool ja lugege PHP veateadet(eid) mis teile �eldakse. Enamustel juhtudel on kuskilt puudu �lakoma v�i semikoolon.<br />Kui Teile kuvatakse t�hi leht on k�ik korras.';
$strConfigureTableCoord = 'Palun seadke koordinaadid tabelile %s';
$strConfirm = 'Kas Te t�esti tahate seda teha?';
$strCookiesRequired = 'K�psised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;v�ljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCreatePage = 'Loo uus leht';
$strCreatePdfFeat = 'PDF-ide tegemine';
$strCriteria = 'Kriteerium';

$strData = 'Andmed';
$strDataOnly = 'Ainult andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabaseWildcard = 'Andmebaas (l�hendid lubatud):';
$strDatabases = 'andmebaasid';
$strDatabasesStats = 'Andmebaaside statistika';
$strDataDict = 'Andmes�nastik';
$strDefault = 'Vaikimisi';
$strDelete = 'Kustuta';
$strDeleteFailed = 'Kustutamine eba�nnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDescending = 'Kahanev';
$strDisabled = 'Keelatud';
$strDisplay = 'N�ita';
$strDisplayFeat = 'Kuva v�imalused';
$strDisplayOrder = 'N�itamise j�rjekord:';
$strDisplayPDF = 'N�ita PDF skeemi';
$strDoAQuery = 'Tee "p�ring n�ite j�rgi" (l�hend: "%")';
$strDoYouReally = 'Kas te t�esti tahate ';
$strDocu = 'Dokumentatsioon';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropTable = 'Kustuta tabel';
$strDumpXRows = 'P�ri %s rida alustades reast %s.';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'd�naamiline';

$strEdit = 'Muuda';
$strEditPDFPages = 'Muuda PDF lehti';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'T�hjenda';
$strEmptyResultSet = 'MySQL tagastas t�hja tulemuse (s.t. null rida).';
$strEnabled = 'Lubatud';
$strEnd = 'L�pp';
$strEndCut = 'L�PETA L�IGE';
$strEndRaw = 'L�PETA PUHAS';
$strEnglishPrivileges = ' M�rkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strExplain = 'Selete SQL-i';
$strExport = 'Ekspordi';
$strExportToXML = 'Ekspordi XML formaatt';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strField = 'V�li';
$strFieldHasBeenDropped = 'V�li %s kustutatud';
$strFields = 'V�ljade arv';
$strFieldsEmpty = ' V�ljade loetelu on t�hi! ';
$strFieldsEnclosedBy = 'V�ljad �mbritsetud';
$strFieldsEscapedBy = 'V�ljad varjatud';
$strFieldsTerminatedBy = 'V�ljad eraldatud';
$strFixed = 'parandatud';
$strFlushTable = '�htlusta tabelid ("FLUSH")';
$strFormEmpty = 'Puuduv v��rtus vormis !';
$strFormat = 'Formaat';
$strFullText = 'T�istekstid';
$strFunction = 'Funktsioon';

$strGenBy = 'Genereerija ';
$strGenTime = 'Tegemisaeg';
$strGeneralRelationFeat = 'Peamised seoste v�imalused';
$strGo = 'Mine';
$strGrants = '�igused';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHaveToShow = 'Te peate valima v�hemalt �he veeru kuvamiseks';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on t�hi!';

$strIdxFulltext = 'T�istekst';
$strIfYouWish = 'Kui soovite lugeda ainult m�ningaid tabeli v�lju, sisestage komaga eraldatud v�ljade loetelu.';
$strIgnore = 'Ignoreeri';
$strImportDocSQL = 'docSQL failide importimine';
$strInUse = 'kasutusel';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi t��p&nbsp;:';
$strIndexes = 'Indeksid';
$strInsecureMySQL = 'Teie konfiguratsioonifail sisaldab seadeid (root kasutaja ilma paroolita) mis vastab MySQL-i vaikimisi priviligeeritud kasutajale. Kui Teie MySQL-i server jookseb sellise seadega on ta avatud r�nnakutele, soovitav on see turvaauk kiiresti parandada.';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInsertedRows = 'Lisatud read:';
$strInstructions = 'sisestused';
$strInvalidName = '"%s" on reserveeritud s�na, te ei saa seda kasutada andmebaasi/tabeli/v�lja nimena.';

$strKeepPass = '�rge muutke parooli';
$strKeyname = 'V�tme nimi';
$strKill = 'Tapa';

$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/V��rtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Real�pp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read l�petatud';
$strLinkNotFound = 'Linki ei leitud';
$strLinksTo = 'Lingib ';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogPassword = 'Parool:';
$strLogUsername = 'Kasutajanimi:';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi v�lja';

$strMissingBracket = 'Puuduv �lakoma';
$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muude indeksit';
$strMoveTable = 'Vii tabel �le (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu �le andmebaasi %s.';
$strMySQLCharset = 'MySQLi t�hetabel';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL �tles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'N�ita protsesse';
$strMySQLShowStatus = 'N�ita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'N�ita MySQL s�steemseid muutujaid';

$strName = 'Nimi';
$strNext = 'J�rgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDescription = 'pole kirjeldust';
$strNoDropDatabases = '"DROP DATABASE" k�sud keelatud.';
$strNoExplain = 'J�ta SQL-i seletamine vahele';
$strNoFrames = 'phpMyAdmin on s�bralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNoPassword = 'Ilma paroolita';
$strNoPhp = 'ilma PHP koodita';
$strNoPrivileges = 'Ei oma �htegi privileegi';
$strNoQuery = '�htegi SQL p�ringut!';
$strNoRights = 'Teil pole piisavalt �igusi, et hetkel siin olla!';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNoUsersFound = 'Ei leitud �htegi kasutajat.';
$strNoValidateSQL = 'J�ta SQL-i kontroll vahele';
$strNone = 'Pole';
$strNotNumber = 'See pole number!';
$strNotOK = 'Ei ole korras';
$strNotSet = '<b>%s</b> tabelit ei leitud v�i ei eksisteeri %s';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s vaste(t) tabelis <i>%s</i>';
$strNumSearchResultsTotal = '<b>Kokku:</b> <i>%s</i> vaste(t)';
$strNumTables = 'Tabelid';

$strOK = 'Korras';
$strOftenQuotation = 'Kasuta jutum�rke koguaeg. VALIKULISELT t�hendab, et ainult char ja varchar t��pi v�ljad �mbritsetakse m��ratud m�rkidega.';
$strOperations = 'Tegevused';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada v�i lugeda erim�rke.';
$strOptionally = 'VALIKULISELT';
$strOptions = 'Valikud';
$strOr = 'v�i';
$strOverhead = '�lej��v';

$strPageNumber = 'Lehenumber:';
$strPartialText = 'L�hendatud tekstid';
$strPassword = 'Parool';
$strPasswordEmpty = 'Parool on t�hi!';
$strPasswordNotSame = 'Paroolid ei �hti!';
$strPdfDbSchema = 'Andmebaasi "%s" skeem - lehek�lg %s';
$strPdfInvalidPageNum = 'Defineerimata PDF lehe number!';
$strPdfInvalidTblName = '"%s" tabel ei eksisteeri!';
$strPdfNoTables = 'Pole tabeleid';
$strPhp = 'Loo PHP kood';
$strPHP40203 = 'Te kasutate PHP 4.2.3, milles on t�sine viga mitmebaidiste tekstidega (mbstring). Vaadake PHP vearaportit 19404. Seda PHP versiooni ei soovitata kasutada phpMyAdminiga.';
$strPHPVersion = 'PHP versioon';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> konstant peab teie konfiguratsioonifailis m��ratud olema!';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne v�ti';
$strPrimaryKeyHasBeenDropped = 'Primaarne v�ti kustutatud';
$strPrimaryKeyName = 'Primaarse v�tme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse v�tme nimi!)';
$strPrint = 'Prindi';
$strPrintView = 'Tr�kivaade';
$strPrivileges = 'Privileegid';
$strProperties = 'Seaded';
$strPutColNames = 'Pange v�ljade nimed esimesse ritta';

$strQBE = 'P�ring n�ite j�rgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-p�ring andmebaasist <b>%s</b>:';

$strReType = 'Sisesta uuesti';
$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli p�rinevust:';
$strRelationNotWorking = 'Lisav�imalused t��tamiseks lingitud tabelitega on deaktiveeritud. Et lugeda miks see nii on, vajutage %ssiia%s.';
$strRelationView = 'P�rinevuse vaade';
$strReloadFailed = 'MySQL taaslaadimine eba�nnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strRememberReload = '�rge unustage serverit taaslaadida.';
$strRenameTable = 'Nimeta tabel �mber';
$strRenameTableOK = 'Tabel %s on �mber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'T�hista';
$strRevoke = 'V�ta tagasi';
$strRevokeGrant = 'V�ta n�udmine tagasi';
$strRevokeGrantMessage = 'Te v�tsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te v�tsite tagasi privileegid %s-lt';
$strRevokePriv = 'V�tke privileegid';
$strRowLength = 'Rea pikkus';
$strRowSize = ' rea suurus ';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'n�ita %s and korda pealkirju iga %s j�rel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunQuery = 'Lae p�ring';
$strRunSQLQuery = 'P�ri SQL p�ring(uid) andmebaasist %s';
$strRunning = 'jookseb masinas %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'On v�imalus, et te leidsite vea SQL parseris. Palun kontrollige oma p�ringut t�psemalt ja kontrollige, et jutum�rgid/�lakomad oleks korrektselt l�petatud. Veel on v�imalik, et te loete sisse faili kus on binaarne info v�ljaspool varjestatud tekstiala. Samuti v�iksite te proovida oma p�ringut MySQLi k�sureal. MySQLi viga v�ljastatakse p�ringu all, kui seal t�esti on m�ni viga, siis see v�ib aidata teil leida vea algp�hjuseid. Kui teil on peale seda ikka veel probleeme v�i kui mu parser keeldub t��tamast ning MySQL k�surida t��tab, siis palun v�hendage oma p�ringuid �ksiku p�ringuni, mis p�hjustab probleeme ja sisestage vea raport koos viga p�hjustanud p�ringuga L�IGET sektsioonis allpool:';
$strSQLParserUserError = 'Tundub, et teie SQL p�ringus on viga. MySQLi serveri error peaks ilmuma allpool, kui seal on midagi, siis peaks see teil aitama leia vea p�hjust.';
$strSQLQuery = 'SQL-p�ring';
$strSQLResult = 'SQL tulemus';
$strSQPBugInvalidIdentifer = 'Vigane identifikaator';
$strSQPBugUnclosedQuote = 'Sulgemata jutum�rk/�lakoma';
$strSQPBugUnknownPunctuation = 'Tundmatu suunav tekst';
$strSave = 'Salvesta';
$strScaleFactorSmall = 'Skalaarfaktor on liiga v�ike, et skeem mahuks �hele lehele.';
$strSearch = 'Otsi';
$strSearchFormTitle = 'Otsi andmebaasist';
$strSearchInTables = 'Otsi tabeli(te)st:';
$strSearchNeedle = 'S�na(d) v�i v��rtus(ed) otsinguks (l�hend: "%"):';
$strSearchOption1 = 'v�hemalt �ks s�nadest';
$strSearchOption2 = 'k�ik s�nadest';
$strSearchOption3 = 't�pne fraas';
$strSearchOption4 = 'regulaaravaldisena';
$strSearchResultsFor = 'Otsingu tulemused "<i>%s</i>" %s:';
$strSearchType = 'Leia:';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'M�rgista k�ik';
$strSelectFields = 'Vali v�ljad (v�hemalt �ks):';
$strSelectNumRows = 'p�ringus';
$strSelectTables = 'Vali tabelid';
$strSend = 'Salvesta failina';
$strServer = 'Server %s';
$strServerChoice = 'Serveri valik';
$strServerVersion = 'Serveri versioon';
$strSetEnumVal = 'Kui v�lja t��p on "enum" v�i "set", palun sisestage v��rtused kasutades j�rgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") v�i �lakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (n�iteks \'\\\\xyz\' v�i \'a\\\'b\').';
$strShow = 'N�ita';
$strShowAll = 'N�ita k�iki';
$strShowColor = 'N�ita v�rvi';
$strShowCols = 'N�ita v�lju';
$strShowGrid = 'N�ita v�rgustiku';
$strShowPHPInfo = 'N�ita PHP informatsiooni';
$strShowTableDimension = 'N�ita tabelite dimensiooni';
$strShowTables = 'N�ita tabeleid';
$strShowThisQuery = ' N�ita p�ringut siin uuesti ';
$strShowingRecords = 'N�ita ridu';
$strSingly = '(�ksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumiv�tt';
$strSplitWordsWithSpace = 'S�nad on eraldatud t�hikuga (" ").';
$strStatement = 'Parameerid';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strStructPropose = 'Soovita tabeli struktuuri';
$strStructure = 'Struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL p�ring t�ideti edukalt';
$strSum = 'Summa';

$strTable = 'Tabel';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on t�hi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s t�hjendatud';
$strTableHasBeenFlushed = 'Tabel %s �htlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli t��p';
$strTables = '%s tabel(it)';
$strTextAreaLength = ' Oma suuruse t�ttu<br /> v�ib see v�li olla mittemuudetav ';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed v�i unikaalsed v�tmed.';
$strTheTerminator = 'V�ljade eraldaja.';
$strTotal = 'kokku';
$strTotalUC = 'Kokku';
$strType = 'T��p';

$strUncheckAll = 'Puhasta k�ik';
$strUnique = 'Unikaalne';
$strUnselectAll = 'Puhasta k�ik';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda p�ringut';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites v�i tabelinimedes';
$strUseTables = 'Kasuta tabeleid';
$strUser = 'Kasutaja';
$strUserEmpty = 'Kasutajanimi on t�hi!';
$strUserName = 'Kasutajanimi';
$strUsers = 'Kasutajad';

$strValidateSQL = 'Kontrolli SQL-i';
$strValidatorError = 'SQL-i valideerijat ei suudetud avada. Palun kontrollige, et te olete installinud vastavad php moodulid nagu on kirjeldatud %sdokumentatsioonis%s.';
$strValue = 'V��rtus';
$strViewDump = 'Vaata tabeli v�ljundit(skeemi)';
$strViewDumpDB = 'Vaata andmebaasi v�ljundit (skeemi)';

$strWebServerUploadDirectory = 'webiserveri �leslaadimiskataloogi';
$strWebServerUploadDirectoryError = 'Kataloog mille Te �leslaadimiseks s�ttisite ei ole ligip��setav';
$strWelcome = 'Tere tulemast %s';
$strWithChecked = 'Valitud:';
$strWrongUser = 'Vale kasutajanimi/parool. Ligip��d keelatud.';

$strYes = 'Jah';

$strZip = '"zipitud"';
?>
