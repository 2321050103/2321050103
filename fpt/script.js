let danhSachPhim = [
  
    {
    id: 2,
    tenPhim: "Mưa Đỏ",
    namPhatHanh: 2023,
    tuoi: 10,
    thoiLuong: 1,5.
    quocGia: "Nhật Bản",
    poster: "img/phim/conan.jpg",
    theLoai: "Phim Hoạt Hình",
  },
   {
    id: 3,
    tenPhim: "Cám",
    namPhatHanh: 2023,
    tuoi: 18,
    thoiLuong: 1,5.
    quocGia: "Việt Nam",
    poster: "img/phim/conan.jpg",
    theLoai: "Phim Truyền Hình",
  },
];
 let phimHienTai =danhSachPhim[0];
 let banner =document.getElementsByClassName('banner   ')[0];
 function chonPhim(idPhim){ 
    for (let i=0; i< danhSachPhim.length;i++){
        if (danhSachPhim[i].id== idPhim){
            mainone.style.backgroundImage =danhSachPhim[i].poster;
        }
    }
 }