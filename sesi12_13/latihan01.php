<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan data json</title>
</head>
<body>
    
    <div id="tampilkan"></div>
    <!-- <table>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Email</td>
            <td>Username</td>
            <td>aksi</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Email</td>
            <td>Username</td>
            <td>aksi</td>
        </tr>
    </table> -->
    
    <script>
        let target = "https://webpro.ptov.my.id/api/curduser.php?aksi=get";
        const bacadata = new XMLHttpRequest();
        bacadata.onload = function(){
            const jdata = JSON.parse(this.responseText);

            console.log(jdata);

            let tx = "<table><tr><td>NO</td><td>Nama Lengkap</td><td>Email</td><td>Username</td><td><a href='latihan01.html'>Tambah</a></td></tr>";
            let no = 1;
            for(let cx=0; cx<jdata.isi.length; cx++){
                tx += "<tr>";
                    tx +=   "<td>"+no+"</td>";
                    tx +=   "<td>"+jdata.isi[cx][0]+"</td>";
                    tx +=   "<td>"+jdata.isi[cx][1]+"</td>";
                    tx +=   "<td>"+jdata.isi[cx][2]+"</td>";
                    tx +=   "<td>";
                    tx +=   '<a href="latihan01-edit.html?id='+jdata.isi[cx][3]+'">edit</a>';
                    tx +=   '<a href="latihan01-delete.html?id='+jdata.isi[cx][3]+'">hapus</a>';
                    tx +=   "</td>";
                    tx +=   "</tr>";
                    no++;
            }
                tx +=   "</table>";
            document.getElementById("tampilkan").innerHTML = tx;
        }
        bacadata.open("GET",target);
        bacadata.send();
    </script>

</body>
</html>