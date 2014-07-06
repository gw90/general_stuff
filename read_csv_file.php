 
 public function read_csv(){
      $emailsArr = array();
        $path = 'C:\Users\john doh\Downloads\allow_mailing_no.csv';
        $columnNeeded = 0;

        $file = fopen($path, 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
            //$line is an array of the csv elements
            $emailsArr[] = "'".$line[$columnNeeded]."'";
        }
        fclose($file);
//        unset($emailsArr[0]);//need to unset something?
        $emailsJoined = implode(',',$emailsArr);
 //Do whatever with the data...
 }
 
