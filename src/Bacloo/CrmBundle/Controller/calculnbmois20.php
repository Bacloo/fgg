<?php
//2.On génère les entêtes de colonnes à partir de la fonction createplanning
                    $iStart = strtotime ($d1);//Formate une date/heure locale avec la Something is wronguration locale
                    $iEnd = strtotime ($d2);
                    if (false === $iStart || false === $iEnd) {
                        // return false;
                    }
                    $aStart = explode ('-', $dStart);
                    $aEnd = explode ('-', $dEnd);
                    if (count ($aStart) !== 3 || count ($aEnd) !== 3) {
                        // return false;
                    }
                    // if (false === checkdate ($aStart[1], $aStart[2], $aStart[0]) || false === checkdate ($aEnd[1], $aEnd[2], $aEnd[0]) || $iEnd <= $iStart) {
                    // return false;
                    // }

                    $jour50 = $loc->getJour50();
                    $jour100 = $loc->getJour100();

                    $aDates = array();
                    for ($i = $iStart; $i < $iEnd + 86400; $i = $i + 86400) {
                        $sDateToArr = strftime('%Y-%m-%d', $i);
                        $sYear = substr($sDateToArr, 0, 4);
                        $sMonth = substr($sDateToArr, 5, 2);

                        if(strftime ('%Y-%m-%d', $i) != strftime ('%Y-%m-%d', $i + 86400))
                        {
                            $aDates[] = $sDateToArr;//echo '>>'.$sDateToArr;
                        }
                    }
                    $nbmois20j = 1;
                    $debut = date('m', strtotime($dStart));
                    //on calcule le nombre de jours de location
                    $feries = $this->getHolidays($year);
                    foreach ($aDates as $dat) {    //echo $dat;
                        $time = strtotime($dat);
                        $newformat = date('D', strtotime($dat));
                        $moisok = date('m', strtotime($dat));
                        if($debut != $moisok){$nbmois20j++;}
                        $debut = date('m', strtotime($dat));
                    }