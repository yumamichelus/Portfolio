/*
    This website was originally developed to be the personal portfolio for Yuma Michelus
    Copyright (C) 2018  Yuma Michelus
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

     This program is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     GNU Affero General Public License for more details.

     You should have received a copy of the GNU Affero General Public License
     along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo= "yuma.michelus@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from: ".$name."\n\nMessage:\n".$message;


    mail($mailTo, $headers, $txt);

    header("Location: index.php#contactConfirmation");




}

?>
