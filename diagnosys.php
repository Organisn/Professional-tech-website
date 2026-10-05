// Secret page to check if openssl ext is enabled and to eventually show phpinfo
<?php
    if (extension_loaded('openssl')) { 
        echo "OpenSSL è ABILITATO\n"; 
        echo "Versione: " . OPENSSL_VERSION_TEXT . "\n\n\n"; 
    } else { 
        echo "OpenSSL NON è abilitato nel file php.ini\n\n\n"; 
    }
    phpinfo();
?>