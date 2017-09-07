<?php
//*******Settings********
$geminiPrice = 189;
$viewPrice = 189;
$vegasPrice = 199;
$cambriaPrice = 205;
$nexusPrice = 199;
$soleraPrice = 175;
$btcruiserPrice = 155;
$mallard_1_Price = 99;
$mallard_2_Price = 99;

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
////Mallard_1/////
$mallard_1_RegDaily =  format_num($mallard_1_Price);
$mallard_1_RegWeekly = format_num($mallard_1_Price*$weeklyMultiplier);
$mallard_1_RegMonthly = format_num($mallard_1_Price*$monthlyMultiplier);
$mallard_1_HighDaily = format_num($mallard_1_Price*$peakMultiplier);
$mallard_1_HighWeekly = format_num($mallard_1_Price*$peakMultiplier*$weeklyMultiplier);
$mallard_1_HighMonthly = format_num($mallard_1_Price*$peakMultiplier*$monthlyMultiplier);
$mallard_1_LowDaily = format_num($mallard_1_Price*$winterMultiplier);
$mallard_1_LowWeekly = format_num($mallard_1_Price*$winterMultiplier*$weeklyMultiplier);
$mallard_1_LowMonthly = format_num($mallard_1_Price*$winterMultiplier*$monthlyMultiplier);
$mallard_1_PrepFee = format_num($smallRVPrep);
////Mallard_2/////
$mallard_2_RegDaily =  format_num($mallard_2_Price);
$mallard_2_RegWeekly = format_num($mallard_2_Price*$weeklyMultiplier);
$mallard_2_RegMonthly = format_num($mallard_2_Price*$monthlyMultiplier);
$mallard_2_HighDaily = format_num($mallard_2_Price*$peakMultiplier);
$mallard_2_HighWeekly = format_num($mallard_2_Price*$peakMultiplier*$weeklyMultiplier);
$mallard_2_HighMonthly = format_num($mallard_2_Price*$peakMultiplier*$monthlyMultiplier);
$mallard_2_LowDaily = format_num($mallard_2_Price*$winterMultiplier);
$mallard_2_LowWeekly = format_num($mallard_2_Price*$winterMultiplier*$weeklyMultiplier);
$mallard_2_LowMonthly = format_num($mallard_2_Price*$winterMultiplier*$monthlyMultiplier);
$mallard_2_PrepFee = format_num($smallRVPrep);

////Gemini/////
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

//***************
///PhoneNumber
$phoneNumber = "404-478-6454";
?>
