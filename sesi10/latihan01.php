<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan01</title>
</head>
<body>
    <form name="latihan1" method="POST" onsubmit="return checkform(this)">
    <h3>Data Mahasiswa</h3>
        <div>
            Nama
            <input type="text" name="txNAMA" id="Nama" > 
        </div>
        <div>
            NIM
            <input type="text" name="txNIM" id="NIM"> 
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJENISKELAMIN" id="JenisKelamin" value="Laki">Laki-Laki
            <input type="radio" name="txJENISKELAMIN" id="JenisKelamin" value="Perempuan">Perempuan
        </div>
        Jurusan 
        <div>
            <select name="txJURUSAN" id="Jurusan">
                <option value="Pertanian">Pertanian</option>
                <option value="Peternakan">Peternakan</option>
                <option value="Perkebunan">Perkebunan</option>
                <option value="TeknikNuklir">Teknik Nuklir</option>
            </select>
        </div>
        <div>
            Hobi 
            <input type="checkbox" name="txHOBIMELALI" idate value="Melali"> Hobi Melali
            <input type="checkbox" name="txHOBIMAINGAME" value="Main Game"> Hobi Main Game
            <input type="checkbox" name="txHOBIOLGA" value="Olga"> Hobi olga
            <input type="checkbox" name="txHOBIRENANG" value="Renang"> Hobi renang
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>

    </form>   
    <script>
        function checkform(frm){
            let F = frm.elements;
            // Nama
            let nama= F.namedItem("txNAMA").value;
            console.log("NAMA :"+nama);
            // NIM
            let nim = F.namedItem("txNIM").value;
            console.log("NIM :"+nim);
            // Jenis Kelamin
            let jk = F.namedItem("txJENISKELAMIN").value;
            console.log("JENISKELAMIN :"+jk);
            // Jurusan
            let jurusan = F.namedItem("txJURUSAN").value;
            console.log("JURUSAN:"+jurusan);
            // Hobi
            let hobi1 =[
            F.namedItem("txHOBIMELALI").checked,
            F.namedItem("txHOBIMAINGAME").checked,
            F.namedItem("txHOBIOLGA").checked,
            F.namedItem("txHOBIRENANG").checked]
            // console.log("HOBI:"+hobi1);
            

            let h1 = hobi1 [0]? "Melali" : " ";
            let h2 = hobi1 [1]? "Main Game" : " ";
            let h3 = hobi1 [2]? "Olga" : " ";
            let h4 = hobi1 [3]? "Renang" : " ";
            console.log("HOBI:"+h1+h2+h3+h4);

            // for(let i = 0;i< hobi1.length;i++){
            //     if(hobi1[i]=true){
            //         console.log("HOBI:"+hobi1[i]);
            //     }
            // }
            

            return false;
        }
       
    </script>
</body>
</html>