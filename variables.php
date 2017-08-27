<?php 
//*******Settings********
$geminiPrice = 189;
$viewPrice = 189;
$vegasPrice = 199;
$cambriaPrice = 205;
$nexusPrice = 199;
$soleraPrice = 175; 
$btcruiserPrice = 155;

$bigRVPrep = 105;
$smallRVPrep = 95;
$trailerPrep = 75;

$weeklyMultiplier = 6.5;
$monthlyMultiplier = 20.8;

$peakMultiplier = 1.05;
$winterMultiplier = .90;

function format_num($in) {
	return '$'.number_format((float)$in, 2, '.', '');
}

//*******Prices********
////Gemini/////
<<<<<<< HEAD
$geminiRegDaily =  format_num($geminiPrice);
$geminiRegWeekly = format_num($geminiPrice*$weeklyMultiplier);
$geminiRegMonthly = format_num($geminiPrice*$monthlyMultiplier);
$geminiHighDaily = format_num($geminiPrice*$peakMultiplier);
$geminiHighWeekly = format_num($geminiPrice*$peakMultiplier*$weeklyMultiplier);
$geminiHighMonthly = format_num($geminiPrice*$peakMultiplier*$monthlyMultiplier);
$geminiLowDaily = format_num($geminiPrice*$winterMultiplier);
$geminiLowWeekly = format_num($geminiPrice*$winterMultiplier*$weeklyMultiplier);
$geminiLowMonthly = format_num($geminiPrice*$winterMultiplier*$monthlyMultiplier);
$geminiPrepFee = format_num($smallRVPrep);

////Vegas/////
$vegasRegDaily =  format_num($vegasPrice);
$vegasRegWeekly = format_num($vegasPrice*$weeklyMultiplier);
$vegasRegMonthly = format_num($vegasPrice*$monthlyMultiplier);
$vegasHighDaily = format_num($vegasPrice*$peakMultiplier);
$vegasHighWeekly = format_num($vegasPrice*$peakMultiplier*$weeklyMultiplier);
$vegasHighMonthly = format_num($vegasPrice*$peakMultiplier*$monthlyMultiplier);
$vegasLowDaily = format_num($vegasPrice*$winterMultiplier);
$vegasLowWeekly = format_num($vegasPrice*$winterMultiplier*$weeklyMultiplier);
$vegasLowMonthly = format_num($vegasPrice*$winterMultiplier*$monthlyMultiplier);
$vegasPrepFee = format_num($smallRVPrep);

////Cambria/////
$cambriaRegDaily =  format_num($cambriaPrice);
$cambriaRegWeekly = format_num($cambriaPrice*$weeklyMultiplier);
$cambriaRegMonthly = format_num($cambriaPrice*$monthlyMultiplier);
$cambriaHighDaily = format_num($cambriaPrice*$peakMultiplier);
$cambriaHighWeekly = format_num($cambriaPrice*$peakMultiplier*$weeklyMultiplier);
$cambriaHighMonthly = format_num($cambriaPrice*$peakMultiplier*$monthlyMultiplier);
$cambriaLowDaily = format_num($cambriaPrice*$winterMultiplier);
$cambriaLowWeekly = format_num($cambriaPrice*$winterMultiplier*$weeklyMultiplier);
$cambriaLowMonthly = format_num($cambriaPrice*$winterMultiplier*$monthlyMultiplier);
$cambriaPrepFee = format_num($bigRVPrep);

////View/////
$viewRegDaily =  format_num($viewPrice);
$viewRegWeekly = format_num($viewPrice*$weeklyMultiplier);
$viewRegMonthly = format_num($viewPrice*$monthlyMultiplier);
$viewHighDaily = format_num($viewPrice*$peakMultiplier);
$viewHighWeekly = format_num($viewPrice*$peakMultiplier*$weeklyMultiplier);
$viewHighMonthly = format_num($viewPrice*$peakMultiplier*$monthlyMultiplier);
$viewLowDaily = format_num($viewPrice*$winterMultiplier);
$viewLowWeekly = format_num($viewPrice*$winterMultiplier*$weeklyMultiplier);
$viewLowMonthly = format_num($viewPrice*$winterMultiplier*$monthlyMultiplier);
$viewPrepFee = format_num($smallRVPrep);

////btcruiser/////
$btcruiserRegDaily =  format_num($btcruiserPrice);
$btcruiserRegWeekly = format_num($btcruiserPrice*$weeklyMultiplier);
$btcruiserRegMonthly = format_num($btcruiserPrice*$monthlyMultiplier);
$btcruiserHighDaily = format_num($btcruiserPrice*$peakMultiplier);
$btcruiserHighWeekly = format_num($btcruiserPrice*$peakMultiplier*$weeklyMultiplier);
$btcruiserHighMonthly = format_num($btcruiserPrice*$peakMultiplier*$monthlyMultiplier);
$btcruiserLowDaily = format_num($btcruiserPrice*$winterMultiplier);
$btcruiserLowWeekly = format_num($btcruiserPrice*$winterMultiplier*$weeklyMultiplier);
$btcruiserLowMonthly = format_num($btcruiserPrice*$winterMultiplier*$monthlyMultiplier);
$btcruiserPrepFee = format_num($smallRVPrep);

////Solera/////
$soleraRegDaily =  format_num($soleraPrice);
$soleraRegWeekly = format_num($soleraPrice*$weeklyMultiplier);
$soleraRegMonthly = format_num($soleraPrice*$monthlyMultiplier);
$soleraHighDaily = format_num($soleraPrice*$peakMultiplier);
$soleraHighWeekly = format_num($soleraPrice*$peakMultiplier*$weeklyMultiplier);
$soleraHighMonthly = format_num($soleraPrice*$peakMultiplier*$monthlyMultiplier);
$soleraLowDaily = format_num($soleraPrice*$winterMultiplier);
$soleraLowWeekly = format_num($soleraPrice*$winterMultiplier*$weeklyMultiplier);
$soleraLowMonthly = format_num($soleraPrice*$winterMultiplier*$monthlyMultiplier);
$soleraPrepFee = format_num($smallRVPrep);

////Nexus/////
$nexusRegDaily =  format_num($nexusPrice);
$nexusRegWeekly = format_num($nexusPrice*$weeklyMultiplier);
$nexusRegMonthly = format_num($nexusPrice*$monthlyMultiplier);
$nexusHighDaily = format_num($nexusPrice*$peakMultiplier);
$nexusHighWeekly = format_num($nexusPrice*$peakMultiplier*$weeklyMultiplier);
$nexusHighMonthly = format_num($nexusPrice*$peakMultiplier*$monthlyMultiplier);
$nexusLowDaily = format_num($nexusPrice*$winterMultiplier);
$nexusLowWeekly = format_num($nexusPrice*$winterMultiplier*$weeklyMultiplier);
$nexusLowMonthly = format_num($nexusPrice*$winterMultiplier*$monthlyMultiplier);
$nexusPrepFee = format_num($bigRVPrep);

=======
$geminiRegDaily = '$199';
$geminiRegWeekly = '$1,293.50';
$geminiRegMonthly = '$4,139.20';
$geminiHighDaily = '$208.95';
$geminiHighWeekly = '$1,358.18';
$geminiHighMonthly = '$4,346.16';
$geminiLowDaily = '$179.10';
$geminiLowWeekly = '$1,164.15';
$geminiLowMonthly = '$3,725.28';
$geminiPrepFee = '$95';
////Vegas/////
$vegasRegDaily = '$199';
$vegasRegWeekly = '$1,293.50';
$vegasRegMonthly = '$4,139.20';
$vegasHighDaily = '$208.95';
$vegasHighWeekly = '$1,358.18';
$vegasHighMonthly = '$4,346.16';
$vegasLowDaily = '$179.10';
$vegasLowWeekly = '$1,164.15';
$vegasLowMonthly = '$3,725.28';
$vegasPrepFee = '$95';
////Cambria/////
$cambriaRegDaily = '$205';
$cambriaRegWeekly = '$1,332.50';
$cambriaRegMonthly = '$4,264';
$cambriaHighDaily = '$215.25';
$cambriaHighWeekly = '$1,399.13';
$cambriaHighMonthly = '$4,477.20';
$cambriaLowDaily = '$184.50';
$cambriaLowWeekly = '$1,199.25';
$cambriaLowMonthly = '$3,837.60';
$cambriaPrepFee = '$105';
////View/////
$viewRegDaily = '$199';
$viewRegWeekly = '$1,293.50';
$viewRegMonthly = '$4,139.20';
$viewHighDaily = '$208.95';
$viewHighWeekly = '$1,358.18';
$viewHighMonthly = '$4,346.16';
$viewLowDaily = '$179.10';
$viewLowWeekly = '$1,164.15';
$viewLowMonthly = '$3,725.28';
$viewPrepFee = '$95';
////Lexington/////
$lexRegDaily = '$175';
$lexRegWeekly = '$1,137.50';
$lexRegMonthly = '$3,640';
$lexHighDaily = '$183.75';
$lexHighWeekly = '$1,194.38';
$lexHighMonthly = '$3,822';
$lexLowDaily = '$157.50';
$lexLowWeekly = '$1,023.75';
$lexLowMonthly = '$3,276';
$lexPrepFee = '$95';
////Phoenix/////
$phoenixRegDaily = '$155';
$phoenixRegWeekly = '$1,007.50';
$phoenixRegMonthly = '$3,224';
$phoenixHighDaily = '$162.75';
$phoenixHighWeekly = '$1,057.50';
$phoenixHighMonthly = '$3,385.20';
$phoenixLowDaily = '$139.50';
$phoenixLowWeekly = '$906.75';
$phoenixLowMonthly = '$2,901.60';
$phoenixPrepFee = '$95';
////btcruiser/////
$btcruiserRegDaily = '$155';
$btcruiserRegWeekly = '$1,007.50';
$btcruiserRegMonthly =  '$3,224';
$btcruiserHighDaily = '$162.75';
$btcruiserHighWeekly = '$1,057.50';
$btcruiserHighMonthly =  '$3,385.20';
$btcruiserLowDaily = '$139.50';
$btcruiserLowWeekly = '$906.75';
$btcruiserLowMonthly = '$2,901.60';
$btcruiserPrepFee = '$95';
////Solera/////
$soleraRegDaily = '$175';
$soleraRegWeekly = '$1,137.50';
$soleraRegMonthly = '$3,640';
$soleraHighDaily = '$183.75';
$soleraHighWeekly = '$1,194.38';
$soleraHighMonthly = '$3,822';
$soleraLowDaily = '$157.50';
$soleraLowWeekly = '$1,023.75';
$soleraLowMonthly = '$3,276';
$soleraPrepFee = '$95';
////Nexus/////
$nexusRegDaily = '$199';
$nexusRegWeekly = '$1,293.50';
$nexusRegMonthly = '$4,139.20';
$nexusHighDaily = '$208.95';
$nexusHighWeekly = '$1,358.18';
$nexusHighMonthly = '$4,346.16';
$nexusLowDaily = '$179.10';
$nexusLowWeekly = '$1,164.15';
$nexusLowMonthly = '$3,725.28';
$nexusPrepFee = '$105';
>>>>>>> origin/master
//***************
///PhoneNumber
$phoneNumber = "404-478-6454";
?>

