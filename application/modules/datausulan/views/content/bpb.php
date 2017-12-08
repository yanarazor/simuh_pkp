<?php 
include_once "../library/config.php";
include_once "../library/inc.library.php";
header("Content-type: application/vnd.ms-word");
header('Content-Disposition: attachment;filename="surat_persetujuan"'.date("dmyHis").'".doc"');
$sqlShow = "SELECT kota FROM infokb";
$qryShow = mysql_query($sqlShow)  or die ("Query ambil data kb salah : ".mysql_error());
$dataShow = mysql_fetch_array($qryShow);
$dataKota = $dataShow['kota'];
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 14">
<meta name=Originator content="Microsoft Word 14">
<link rel=File-List href="SURAT%20JALAN_files/filelist.xml">
<link rel=Edit-Time-Data href="SURAT%20JALAN_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>SAWITRI-NOTEBOOK</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>SAWITRI-NOTEBOOK</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>12</o:TotalTime>
  <o:Created>2013-02-27T22:36:00Z</o:Created>
  <o:LastSaved>2013-02-27T22:36:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>66</o:Words>
  <o:Characters>379</o:Characters>
  <o:Company>KINOSENTRA</o:Company>
  <o:Lines>3</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>444</o:CharactersWithSpaces>
  <o:Version>14.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="SURAT%20JALAN_files/themedata.thmx">
<link rel=colorSchemeMapping href="SURAT%20JALAN_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
  DefSemiHidden="true" DefQFormat="false" DefPriority="99"
  LatentStyleCount="267">
  <w:LsdException Locked="false" Priority="0" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" Priority="10" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" Priority="11" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" Priority="22" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" Priority="59" SemiHidden="false"
   UnhideWhenUsed="false" Name="Table Grid"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" SemiHidden="false"
   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" SemiHidden="false"
   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" SemiHidden="false"
   UnhideWhenUsed="false" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" SemiHidden="false"
   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" SemiHidden="false"
   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:Comic Sans MS;
  panose-1:2 15 5 2 2 2 4 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-520092929 1073786111 9 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Comic Sans MS;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
span.SpellE
  {mso-style-name:"";
  mso-spl-e:yes;}
span.GramE
  {mso-style-name:"";
  mso-gram-e:yes;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Comic Sans MS;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
  {mso-style-type:export-only;
  margin-bottom:10.0pt;
  line-height:115%;}
@page WordSection1
  {size:8.5in 11.0in;
  margin:1.0in 1.0in 1.0in 1.0in;
  mso-header-margin:.5in;
  mso-footer-margin:.5in;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
span.SpellE1 {mso-style-name:"";
  mso-spl-e:yes;}
span.SpellE2 {mso-style-name:"";
  mso-spl-e:yes;}
.style2 {font-family: Arial Narrow}
.style3 {font-family: "Arial Narrow"}
.style5 {font-family: Arial Narrow; font-size: 11pt; }
div.MsoNormal1 {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Comic Sans MS;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
li.MsoNormal1 {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Comic Sans MS;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
p.MsoNormal1 {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:10.0pt;
  margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Comic Sans MS;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
  {mso-style-name:"Table Normal";
  mso-tstyle-rowband-size:0;
  mso-tstyle-colband-size:0;
  mso-style-noshow:yes;
  mso-style-priority:99;
  mso-style-parent:"";
  mso-padding-alt:0in 5.4pt 0in 5.4pt;
  mso-para-margin-top:0in;
  mso-para-margin-right:0in;
  mso-para-margin-bottom:10.0pt;
  mso-para-margin-left:0in;
  line-height:115%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
table.MsoTableGrid
  {mso-style-name:"Table Grid";
  mso-tstyle-rowband-size:0;
  mso-tstyle-colband-size:0;
  mso-style-priority:59;
  mso-style-unhide:no;
  border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;
  mso-padding-alt:0in 5.4pt 0in 5.4pt;
  mso-border-insideh:.5pt solid windowtext;
  mso-border-insidev:.5pt solid windowtext;
  mso-para-margin:0in;
  mso-para-margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Comic Sans MS","sans-serif";
  mso-ascii-font-family:Comic Sans MS;
  mso-ascii-theme-font:minor-latin;
  mso-hansi-font-family:Comic Sans MS;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1028"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:.5in'>
<?php

  # Baca variabel URL
$kodeTransaksi = $_GET['nomor'];
# Perintah untuk mendapatkan data dari tabel pengeluaran
$sjSql = mysql_query("SELECT pemasukan.*, pemasok.kode_pemasok, pemasok.nama, pemasok.alamat,pemasok.kota,pemasok.negara 
FROM pemasukan inner join pemasok on pemasukan.pemasok=pemasok.kode_pemasok
WHERE pemasukan.nomor='$kodeTransaksi'");
$sjRow = mysql_fetch_array($sjSql);
?>

<div class=WordSection1>
  <table width="680" border=0 cellpadding=0 cellspacing=0 class=MsoTableGrid
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  
  <td width=680 align=center valign=top style='width:492.9pt;border:none;mso-border-none-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><p align="center"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/National_emblem_of_Indonesia_Garuda_Pancasila.svg/940px-National_emblem_of_Indonesia_Garuda_Pancasila.svg.png" width="110" height="113"></p>
    <p align="center" class="style3">KEMENTERIAN DESA,  PEMBANGUNAN DAERAH TERTINGGAL DAN TRANSMIGRASI<br>
      REPUBLIK INDONESIA</p>
    <p align="justify" class=MsoNormal><!--[if gte vml 1]><v:line id="Straight_x0020_Connector_x0020_1"
 o:spid="_x0000_s1027" style='position:absolute;z-index:251659264;visibility:visible;
 mso-wrap-style:square;mso-height-percent:0;mso-wrap-distance-left:19pt;
 mso-wrap-distance-top:0;mso-wrap-distance-right:19pt;
 mso-wrap-distance-bottom:0;mso-position-horizontal:absolute;
 mso-position-horizontal-relative:text;mso-position-vertical:absolute;
 mso-position-vertical-relative:text;mso-height-percent:0;
 mso-height-relative:margin' from="-6.75pt,12.15pt" to="472.5pt,12.15pt"
 o:gfxdata="UEsDBBQABgAIAAAAIQC2gziS/gAAAOEBAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
90jcwfIWJU67QAgl6YK0S0CoHGBkTxKLZGx5TGhvj5O2G0SRWNoz/78nu9wcxkFMGNg6quQqL6RA
0s5Y6ir5vt9lD1JwBDIwOMJKHpHlpr69KfdHjyxSmriSfYz+USnWPY7AufNIadK6MEJMx9ApD/oD
OlTrorhX2lFEilmcO2RdNtjC5xDF9pCuTyYBB5bi6bQ4syoJ3g9WQ0ymaiLzg5KdCXlKLjvcW893
SUOqXwnz5DrgnHtJTxOsQfEKIT7DmDSUCaxw7Rqn8787ZsmRM9e2VmPeBN4uqYvTtW7jvijg9N/y
JsXecLq0q+WD6m8AAAD//wMAUEsDBBQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAX3JlbHMvLnJl
bHOkkMFqwzAMhu+DvYPRfXGawxijTi+j0GvpHsDYimMaW0Yy2fr2M4PBMnrbUb/Q94l/f/hMi1qR
JVI2sOt6UJgd+ZiDgffL8ekFlFSbvV0oo4EbChzGx4f9GRdb25HMsYhqlCwG5lrLq9biZkxWOiqY
22YiTra2kYMu1l1tQD30/bPm3wwYN0x18gb45AdQl1tp5j/sFB2T0FQ7R0nTNEV3j6o9feQzro1i
OWA14Fm+Q8a1a8+Bvu/d/dMb2JY5uiPbhG/ktn4cqGU/er3pcvwCAAD//wMAUEsDBBQABgAIAAAA
IQCqeDM4twEAALcDAAAOAAAAZHJzL2Uyb0RvYy54bWysU01vEzEQvSPxHyzfyW4iCNUqmx5SwQVB
ROkPcL3jrFXbY41NPv49YyfZIkA9oF68Hvu9mXnPs6vbo3diD5Qshl7OZ60UEDQONux6+fDj07sb
KVJWYVAOA/TyBEnert++WR1iBwsc0Q1AgpOE1B1iL8ecY9c0SY/gVZphhMCXBsmrzCHtmoHUgbN7
1yzadtkckIZIqCElPr07X8p1zW8M6PzNmARZuF5yb7muVNfHsjbrlep2pOJo9aUN9R9deGUDF51S
3amsxE+yf6XyVhMmNHmm0TdojNVQNbCaefuHmvtRRaha2JwUJ5vS66XVX/dbEnbgt5MiKM9PdJ9J
2d2YxQZDYAORxLz4dIipY/gmbOkSpbilIvpoyJcvyxHH6u1p8haOWWg+XLY3y/cfP0ihr3fNMzFS
yp8BvSibXjobimzVqf2XlLkYQ68QDkoj59J1l08OCtiF72BYChdbVHYdItg4EnvFzz88VRmcqyIL
xVjnJlL7MumCLTSogzUR5y8TJ3StiCFPRG8D0r/I+Xht1ZzxV9VnrUX2Iw6n+hDVDp6O6tJlksv4
/R5X+vP/tv4FAAD//wMAUEsDBBQABgAIAAAAIQDBn0Qp3QAAAAkBAAAPAAAAZHJzL2Rvd25yZXYu
eG1sTI9NT8MwDIbvSPyHyEhc0JbuozBK0wkhOCDtwkCcvcYkFU1SNdka/j1GHOBo+9Hr56232fXi
RGPsglewmBcgyLdBd94oeHt9mm1AxIReYx88KfiiCNvm/KzGSofJv9Bpn4zgEB8rVGBTGiopY2vJ
YZyHgTzfPsLoMPE4GqlHnDjc9XJZFNfSYef5g8WBHiy1n/ujU9Bmma/sozaTuXnWO4ybd1nulLq8
yPd3IBLl9AfDjz6rQ8NOh3D0OopewWyxKhlVsFyvQDBwuy653OF3IZta/m/QfAMAAP//AwBQSwEC
LQAUAAYACAAAACEAtoM4kv4AAADhAQAAEwAAAAAAAAAAAAAAAAAAAAAAW0NvbnRlbnRfVHlwZXNd
LnhtbFBLAQItABQABgAIAAAAIQA4/SH/1gAAAJQBAAALAAAAAAAAAAAAAAAAAC8BAABfcmVscy8u
cmVsc1BLAQItABQABgAIAAAAIQCqeDM4twEAALcDAAAOAAAAAAAAAAAAAAAAAC4CAABkcnMvZTJv
RG9jLnhtbFBLAQItABQABgAIAAAAIQDBn0Qp3QAAAAkBAAAPAAAAAAAAAAAAAAAAABEEAABkcnMv
ZG93bnJldi54bWxQSwUGAAAAAAQABADzAAAAGwUAAAAA
" strokecolor="black [3200]" strokeweight="2pt">
 <v:shadow on="t" color="black" opacity="24903f" origin=",.5" offset="0,.55556mm"/>
</v:line><![endif]--><![if !vml]><![endif]>
    </p>
    <table width="632" border="0" align="left" cellpadding="2" cellspacing="2">
    <tr>
      <td height="28">&nbsp;</td>
      <td><div align="right"><span class="MsoNormal">2016</span></div></td>
    </tr>
    <tr>
      <td height="28"><span class="style2" style="  text-align:left;line-height:normal">Nomor&nbsp;</span></td>
      <td><span class="MsoNormal" style="  text-align:left;line-height:normal">: </span></td>
    </tr>
    <tr>
      <td height="28"><span class="style2" style="margin-bottom: 0in">Sifat&nbsp; </span></td>
      <td><span class="style2">:Segera&nbsp;</span></td>
    </tr>
    <tr>
      <td height="28"><span class="style2" style="margin-bottom: 0in">Lampiran&nbsp;</span></td>
      <td><span class="style2" style="margin-bottom: 0in">:1  (satu) berkas</span></td>
    </tr>
    <tr>
      <td width="197" height="28"><span class="style2">Hal</span></td>
      <td width="421"><div align="left"><span class="style2"><span class="MsoNormal" style="  text-align:left;line-height:normal">:Persetujuan  Hibah Barang Milik Negara Berupa Selain Tanah dan/atau Bangunan pada DitjenPengembangan Kawasan Transmigrasi</span></span></div></td>
    </tr>
  </table>
  <p class=MsoNormal style='  text-align:justify;line-height:normal'>&nbsp;</p>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>&nbsp;</p></td>
 </tr>
</table>
<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'><o:p>&nbsp;</o:p>
  </p>
<p align="left" class=MsoNormal style='text-align:justify;tab-stops:414.75pt'>&nbsp;</p>
<p class="style2">Kepada Yth.<br>
  Direktur Jenderal Pengembangan Kawasan Transmigrasi<br>
  Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi<br>
  di Jakarta</p>
<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'>&nbsp;</p>
<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'><span class="style2">Sehubungan dengan surat Saudara  Nomor <span class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal">:&nbsp;<?php echo $sjRow['no_bpb']; ?> Tanggal: <?php echo IndonesiaTgl($sjRow['tgl_bpb']); ?></span>, Hal : Usulan Hibah  BMN, dengan ini diberitahukan  bahwa permohonan Hibah Barang Milik Negara pada Dinas Tenaga Kerja dan  Transmigrasi  berupa selain tanah dan/atau bangunan dengan nilai  perolehan seluruhnya sebesar Rp.<span class="style3" style="width:62.4pt;border-top:none;border-left:none;
  border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:none;
  mso-border-alt:none;padding:0in 5.4pt 0in 5.4pt"><?php echo format_angka($test['no_invoice']); ?></span>sebagaimana tercantum dalam lampiran surat ini, pada prinsipnya dapat  disetujui.</span> </p>
<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'><span class="style2">Guna tertib administrasi  pengelolaan Barang Milik Negara, pelaksanaan Hibah tersebut agar berpedomaen  pada Peraturan Pemerintah Nomor 27 Tahun 2014 tentang Pengelolaan Barang Milik  Negara/Daerah dan Peraturan Menteri Keuangan Nomor 104/PMK.06/2015 tentang  Perubahan Kedua Atas Peraturan Menteri Keuangan Nomor 125/PMK.06/2011 Tentang  Pengelolaan Barang Milik Negara Yang Berasal Dari Dana Dekonsentrasi dan Dana  Tugas Pembantuan Sebelum Tahun Anggaran 2011, dengan ketentuan sebagai berikut:</span></p>
<ol><li>
  <p class="style5" style="text-align:justify;tab-stops:414.75pt">Berdasarkan persetujuan Hibah ini,  Sekretaris Unit Eselon I/Kuasa Pengguna Barang agar menetapkan keputusan  mengenai jenis, jumlah dan nilai Barang Milik Negara yang akan dihibahkan; </p>
</li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Persetujuan Hibah ini segera ditindaklanjuti dengan  pelaksanaan Hibah Barang Milik Negara yang dituangkan dalam Naskah Hibah dan  Berita Acara Serah Terima antara Direktur Jenderal Pengembangan Kawasan  Transmigrasi Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi  dan Pemerintah Daerah Provinsi Kalimantan Selatan selaku calon penerima Hibah  paling lama 2 (dua) bulan sejak tanggal surat persetujuan Hibah ini  diterbitkan;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Keputusan Penghapusan Barang Milik Negara ditetapkan oleh  Sekretaris Unit Eselon I/Kuasa Pengguna Barang sesuai dengan Keputusan Menteri  Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Nomor 68 Tahun 2015  Tentang Pendelegasian Sebagian Wewenang Menteri Desa, Pembangunan Daerah  Tertinggal dan Transmigrasi Selaku Pengguna Barang Kepada Pejabat Struktural  Dan Kuasa Pengguna Barang Di lingkungan Kementerian Desa, Pembangunan Daerah  Tertinggal dan Transmigrasi Dalam Rangka Pengelolaan Barang Milik Negara  Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi, paling lama 2  (dua) bulan sejak tanggal Berita Acara Serah Terima dan Naskah Hibah  ditandatangani;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Barang Milik Negara yang telah dihibahkan agar segera dihapus  dari Daftar Barang Kuasa Pengguna Barang dan Penghapusan dimaksud didasarkan  pada Keputusan Penghapusan yang ditetapkan oleh Sekretaris Unit Eselon I/Kuasa  Pengguna Barang;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Pengguna Barang menyampaikan laporan pelaksanaan Hibah kepada  Pengelola Barang c.q Direktur Jenderal Kekayaan Negara paling lama 1 (satu)  bulan sejak Keputusan Penghapusan BMN ditandatangani dengan melampirkan Naskah  Hibah, Berita Acara Serah Terima dan Keputusan Penghapusan;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Menyampaikan foto copy Berita Acara Serah Terima dan Naskah  Hibah kepada Menteri Keuangan c.q Direktur Jenderal Pengelolaan Utang selaku  Unit Akuntansi Kuasa Pengguna Anggaran;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Kebenaran materiil atas jenis, jumlah, tahun dan nilai Barang  Milik Negara yang dihibahkan serta calon penerima Hibah tersebut menjadi  tanggung jawab Kuasa Pengguna Barang;</p>
  </li>
  <li>
    <p class="style5" style="text-align:justify;tab-stops:114.75pt">Apabila di kemudian hari terdapat kekeliruan dalam surat  persetujuan ini, maka akan dilakukan perbaikan sebagaimana mestinya.</p>
    </li>
</ol>
<p class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<blockquote>
  <p class="style2"> Atas  perhatian Saudara, kami ucapkan terima kasih.</p>
  <p class="style2">&nbsp;</p>
</blockquote>
<table width="765" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="757"><div align="center"><span class="style3">an. Menteri  Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Republik Indonesia<br>
      Sekretaris  Jenderal</span></div></td>
  </tr>
  <tr>
    <td height="133"><div align="center"><span class="style3"><strong>ANWAR SANUSI, Ph.D</strong><br>
        <strong>NIP. 19681117 199403 1 001</strong></span></div></td>
  </tr>
</table>
<p class="style3">Tembusan :<br>
  1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menteri  Desa, Pembangunan Daerah Tertinggal dan Transmigrasi;<br>
  2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inspektur  Jenderal, Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi;<br>
  3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Direktur  Barang Milik Negara, DJKN, Kementerian Keuangan;</p>
<blockquote>
  <blockquote><blockquote><blockquote>&nbsp;</blockquote>
        </blockquote>
    </blockquote>
</blockquote>
<p class="style2">&nbsp;</p>
<p class="style2">Lampiran : Surat Persetujuan Hibah  Barang Milik Negara<br>
  Sekretariat  Jenderal, Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi</p>
<p class=MsoNormalCxSpMiddle style2 style='margin-bottom:.0001pt;
mso-add-space:auto;text-align:justify;tab-stops:414.75pt'>&nbsp;</p>
<p class=MsoNormalCxSpMiddle style3 style='margin-bottom:.0001pt;
mso-add-space:auto;text-align:justify;tab-stops:414.75pt' style2><strong>DAFTAR BARANG MILIK NEGARA BERUPA SELAIN TANAH DAN  / ATAU BANGUNAN &nbsp;YANG DISETUJUI UNTUK  DIHIBAHKAN </strong></p>
<p class=MsoNormalCxSpMiddle style2 style='margin-bottom:.0001pt;
mso-add-space:auto;text-align:justify;tab-stops:414.75pt'>&nbsp;</p>
<p class=MsoNormalCxSpMiddle style='margin-bottom:0in;margin-bottom:.0001pt;
mso-add-space:auto;text-align:justify;tab-stops:414.75pt'><span
style='mso-spacerun:yes'> </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=49 valign=top style='width:26.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><b style='mso-bidi-font-weight:
  normal'><span class="style3">No.</span>
    <o:p></o:p></b></p>  </td>
    <td width=207 valign=top style='width:144.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><span class=SpellE style3><b
  style='mso-bidi-font-weight:normal'>Kode</b></span><span style="font-family: &quot;Arial Narrow&quot;"><b style='mso-bidi-font-weight:
  normal'> Barang
        <o:p></o:p>
  </b></span></p></td>
    <td width=280 valign=top style='width:199.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><span class=SpellE style3><b
  style='mso-bidi-font-weight:normal'>Jenis BMN </b></span></p>  </td>
    <td width=97 valign=top style='width:62.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><div align="center"><span class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt"><span class=SpellE style3><b
  style='mso-bidi-font-weight:normal'>NUP</b></span></span></div></td>
    <td width=200 valign=top style='width:62.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><span class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt"><span class=SpellE2 style3><b
  style='mso-bidi-font-weight:normal'>Lokasi</b></span><span style="font-family: &quot;Arial Narrow&quot;"><b style='mso-bidi-font-weight:
  normal'></b></span></span></td>
    <td width=150 valign=top style='width:62.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p align=center class=MsoNormal style3 style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><span class=SpellE style3><b
  style='mso-bidi-font-weight:normal'>Nilai</b></span></p>  </td>
  <td width=106 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><span class=SpellE style3><b
  style='mso-bidi-font-weight:normal'>Tahun Perolehan </b></span></p>  </td>
  <td width=106 valign=top style='width:45.6pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><span style="font-family: &quot;Arial Narrow&quot;"><b
  style='mso-bidi-font-weight:normal'>Kondisi</b></span></td>
 </tr>

 <?php
 #AND pemasukan_detail.dokumen='Di-Setujui'
 $no=1;
 $detail = mysql_query("SELECT barang.kd_barang,barang.nm_barang,barang.satuan, pemasukan_detail.nomor,pemasukan_detail.id,pemasukan_detail.kode,pemasukan_detail.jumlah,pemasukan_detail.NUP,pemasukan_detail.volume_detail,pemasukan_detail.Sam_N_Perolehan,pemasukan_detail.Thn_Perolehan,pemasukan_detail.Kondisi,pemasukan_detail.nilai
    FROM pemasukan_detail inner join barang on pemasukan_detail.kode=barang.kd_barang
    WHERE pemasukan_detail.nomor='$kodeTransaksi' AND pemasukan_detail.dokumen='Di-Setujui'
    ORDER BY pemasukan_detail.id ");
 while($rdetail = mysql_fetch_array($detail)){ ?>
 <?php
 $test = mysql_query("SELECT pemasukan.no_invoice
FROM pemasukan WHERE pemasukan.nomor='$kodeTransaksi'");
$test = mysql_fetch_array($test);
?>
 <tr style='mso-yfti-irow:1'>
  <td width=49 valign=top style='width:26.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt'><span class="style3"><?php echo $no; ?></span></p>  </td>
   <td width=207 valign=top style='width:144.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  left;line-height:normal;tab-stops:414.75pt'><o:p><span class="style3"><?php echo $rdetail['kode']; ?></span></o:p>
  </p>  </td>
   <td width=280 valign=top style='width:199.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;tab-stops:414.75pt'><o:p></o:p>
    <span class="MsoNormal" style="margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal;tab-stops:414.75pt"><span class=SpellE><span class="MsoNormal style3" style="margin-bottom:0in;margin-bottom:.0001pt;text-align:
  justify;line-height:normal;tab-stops:414.75pt"><?php echo $rdetail['nm_barang']; ?></span></span></span></p>  </td>
   <td width=97 valign=top style='width:62.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><span class="style3"><?php echo $rdetail['NUP']; ?></span></td>
   <td width=200 valign=top style='width:62.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><span class="style3"><?php echo $rdetail['volume_detail']; ?></span></td>
   <td width=150 valign=top style='width:62.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  right;line-height:normal;tab-stops:414.75pt'><o:p><span class="style3"><?php echo format_angka ($rdetail['Sam_N_Perolehan']); ?></span></o:p>
  </p>  </td>
  <td width=106 valign=top style='width:45.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:
  center;line-height:normal;tab-stops:414.75pt'><o:p><span class="style3"><?php echo $rdetail['Thn_Perolehan']; ?></span></o:p>
  </p>  </td>
  <td width=106 valign=top style='width:45.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'><span class="style3"><?php echo $rdetail['Kondisi']; ?></span></td>
 </tr>
 <?php
 $sqll ="SELECT Sam_N_Perolehan FROM pemasukan_detail";
//$tmpQry = mysql_query($tmpSql, $koneksidb) or die ("Gagal Query Tmp".mysql_error());
//$nilaiBrg = 0; $qtyBrg = 0; $nomor=0;
//while($tmpRow = mysql_fetch_array($tmpQry)) {
	$ID		= $rdetaii['no'];
	//$qtyBrg = $qtyBrg + $tmpRow['jumlah'];
	$nilaiBrg = $rdetail['Sam_N_Perolehan'] + $rdetail['no'] + $nilaiBrg;
 $no++;
 } ?>
 <tr>
    <td colspan="3" align="right">&nbsp;</td>
    <td colspan="2" align="left"><div align="right"><b><span class="style3">Jumlah</span> :</b></div></td>
      <td colspan="6" align="left"><span class="style3" style="width:62.4pt;border-top:none;border-left:none;
  border-bottom:none;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:none;
  mso-border-alt:none;padding:0in 5.4pt 0in 5.4pt"><b><?php echo format_angka($nilaiBrg); ?></b><b> 
        <input name="Sam_nilaiBrg" type="hidden" value="<?php echo $nilaiBrg; ?>">
        </b></span></td>
    </tr>
</table>

<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='text-align:justify;tab-stops:414.75pt'>&nbsp;</p>

<p align="center" class="style3">an. Menteri  Desa, Pembangunan Daerah Tertinggal dan Transmigrasi Republik Indonesia<br>
  Sekretaris  Jenderal</p>
<p align="center" class="style3">&nbsp;</p>
<p align="center" class="style3"><strong>ANWAR SANUSI, Ph.D</strong><br>
    <strong>NIP. 19681117 199403 1 001</strong></p>
</div>

</body>

</html>
