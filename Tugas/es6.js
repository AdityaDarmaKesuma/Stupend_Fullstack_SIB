const hitungTotal = (nama, ...nilai) => {

    const nilaiGabungan = [...nilai, 3, 7];

    const totalNilai = nilaiGabungan.reduce((total, angka) => total + angka, 0);
  
    console.log(`Nama: ${nama}, Total nilai: ${totalNilai}`);
  };
  
  //penggunaan fungsi
  hitungTotal('Aditya', 10, 20, 5, 3);
  hitungTotal('Darma', 20, 30);
  hitungTotal('Kesuma', 10, 20);
  