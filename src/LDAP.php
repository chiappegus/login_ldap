
<?php





$ldaphost = "ldap://MAGYP-DC01.MAGYP.AR";
$ldapport = 389;
$ds = ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
if ($ds)
{
    $username = "MAGYP\gchiappe";
    $upasswd  = "pANDAC";
    $ldapbind = ldap_bind($ds, $username, $upasswd);

    if ($ldapbind)
    {
       print "Congratulations! you are authenticated successfully.";
    }else{
      print "Better luck next time!";
    }
}
?>
