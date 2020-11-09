<?php
    require_once('../wp-load.php');
    global $wpdb;
    global $current_user;
    $userEmail = $current_user->user_email;
    //var_dump($userEmail);
    $results = $wpdb->get_results( 'select * from h2a_invoices where companyEmail = "test@company.com"', OBJECT );
    // var_dump($results);
    // var_dump($results[0]->invoiceName);
    $filename = $results[0]->invoiceName;
    $path = '../wp-content/uploads/invoices/';
    $file = $path.$filename;
    // var_dump($file);
  
    // // Header content type 
    // header('Content-type: application/pdf'); 
    
    // header('Content-Disposition: inline; filename="' . $filename . '"'); 
    
    // header('Content-Transfer-Encoding: binary'); 
    
    // header('Accept-Ranges: bytes'); 
    
    // // Read the file 
    // @readfile($file); 
?>
<html>
    <head>
    </head>
    <body>
    
    </body>
</html>