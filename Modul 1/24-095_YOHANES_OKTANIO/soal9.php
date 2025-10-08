
<?php
function Ping(){
    echo "Pong <br>";
}; Ping();


function rekomenDistro($punya_kehidupan) {
    echo "Saran Distro : ";
    if ($punya_kehidupan){
        echo "Apapun aja yang simple , saran Ubuntu Family <br>";
    } else {
        echo "Arch! <br>";
    }
}
rekomenDistro(false);


function buatLinkGit($username,$reponame){

    $link = "https://github.com/$username/$reponame";
    echo "<a href='$link'>$link</a> <br>";
}

buatLinkGit("yohanesokta","WebServices-Gajah");

function instalasiDestination($diskPath = "C", $destination = "\\Gajahweb\\") {
    echo "$diskPath:$destination";
}

instalasiDestination("D");
echo "<br>";

function perkalian($a,$b) {
    return $a * $b;
}

echo perkalian(3,10);


?>