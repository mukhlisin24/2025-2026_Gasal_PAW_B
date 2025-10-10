<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <div id="cntr"></div>
        <?php

        if (isset($_GET['harga'])) {

            $total = array_sum($_GET['harga']);
            echo "Total Harga : " . $total;

        }

        ?>
        <button type="button" onclick="tambahItem()">Tambah</button>
        <button type="submit">Kirim</button>
    </form>



    <script>
        function tambahItem() {
        let ctnr =  document.createElement('div')

         let labal1 = document.createElement('label')
         labal1.setAttribute('for','nama');
         labal1.innerText = "Nama";

         let select = document.createElement('select');
         select.setAttribute('name','nama[]');
         select.setAttribute('id','nama');

         let option1 = document.createElement('option')
         option1.setAttribute('value',"Nanas")
         option1.innerHTML = "Nanas";

         let option2 = document.createElement('option')
         option2.setAttribute('value',"Strobery")
         option2.innerHTML = "Strobery";

         let option3 = document.createElement('option')
         option3.setAttribute('value',"Anggur")
         option3.innerHTML = "Anggur";
         select.appendChild(option1)
         select.appendChild(option2)
         select.appendChild(option3)

         let labal2 = document.createElement('label')
         labal2.setAttribute('for','harga');
         labal2.innerText = "Harga";

         let input = document.createElement('input')
         input.setAttribute('type','number')
         input.setAttribute('name','harga[]')

        ctnr.appendChild(labal1);
        ctnr.appendChild(select)
        ctnr.appendChild(labal2)
        ctnr.appendChild(input)

        document.getElementById('cntr').appendChild(ctnr)

        }
        tambahItem()
    </script>
</body>

</html>