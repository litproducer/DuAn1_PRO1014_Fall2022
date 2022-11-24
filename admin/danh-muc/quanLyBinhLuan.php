<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản Lý Bình Luận</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/8ddf476500.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section class="admin mx-auto items-center ">
        <!--nav-bar-top-->
      <section class="grid grid-cols-8 gap-4 bg-gradient-to-r from-green-500 border">
        <div class="logo flex items-center max-w-7xl lg:max-w-[80.5%] col-span-2">
          <img
            src="../../images/zyro-mouth.png"
            alt=""
            width="30%"
            class="max-w-7xl md:inlne-flex"
          />
          <h2 class="p-4 font-bold text-2xl md:text-center hover:text-white">Health Clinic</h2>
        </div>
        <div class="user col-span-6 border">
          <div class="flex justify-between items-center my-10 ">
            <div class="search">
              <div class="drop-down">
                
              </div>
            </div>
            <div class="profile flex space-x-4 p-4">
              <div class="notification">
                <a class="" href=""><i class="fa-regular fa-bell"></i></a>
              </div>
              <div class="message">
                <a href=""><i class="fa-regular fa-envelope "></i></a>
              </div>
              <div class="icon-user">
                <a href=""><i class="fa-regular fa-user"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- Main -->
      <section class="manage grid grid-cols-8 gap-4 my-4">
        <div class="menu col-span-2 leading-10 text-center  ">
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="index.php"
            >Quản lý tài khoản nhân sự</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="quanLyBenhNhan.php"
            >Quản lý bệnh nhân</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="quanLyHoSo.php"
            >Quản lý hồ sơ</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="quanLyBinhLuan.php"
            >Quản lý bình luận</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="quanLyBooking.php"
            >Quản lý booking</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-yellow-500"
            href="quanLyLichKham.php"
            >Quản lý lịch trình</a
          >
          <a
            class="block py-[35px] my-2 font-bold text-lg text-white bg-gradient-to-r from-green-500 to-yellow-300  hover:from-blue-500 hover:to-green-500 hover:border hover:border-red-500"
            href="quanLyKetLuan.php"
            >Quản lý kết luận</a
          >
        </div>
        <section class="col-span-6 border-2-sm bg-gradient-to-r from-green-500 my-2 ">
            <h2 class="p-4 font-bold text-2xl text-center text-gray-600 uppercase">Quản lý bệnh nhân</h2>
            <div class="max-w-[70%] mx-auto bg-white p-3">
              <h2 class="border-b-4 font-bold text-2xl py-3">Static voice</h2>
              <table class="w-full texts-sm text-left p-3 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                  <tr>
                    <th class="py-3 px-6" >STT</th>
                    <th class="py-3 px-6" >User</th>
                    <th class="py-3 px-6" >Nội dung</th>
                    <th class="py-3 px-6" >Thời gian bình luận</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="bg-white border-b dark:bg-gray-300 dark:border-gray-700">
                  <tr>
                    <td class="py-4 px-6" >1</td>
                    <td class="py-4 px-6" >Trần Hữu Hưng</td>
                    <td class="py-4 px-6" >Phòng khám rất chất lượng, bác sĩ có năng lực chuyên sâu</td>
                    <td class="py-4 px-6" >12-11-2022</td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Sửa</a></td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Xóa</a></td>
                  </tr>
                  <tr>
                    <td class="py-4 px-6" >1</td>
                    <td class="py-4 px-6" >Vũ Minh Đại</td>
                    <td class="py-4 px-6" >Hài lòng </td>
                    <td class="py-4 px-6" >18-12-2022</td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Sửa</a></td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Xóa</a></td>
                  </tr>
                  <tr>
                    <td class="py-4 px-6" >1</td>
                    <td class="py-4 px-6" >Lê Thanh Toàn</td>
                    <td class="py-4 px-6" >Các y bác sĩ tại bênh viện tận tình tỉ mỉ</td>
                    <td class="py-4 px-6" >1-12-2022</td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Sửa</a></td>
                    <td class="py-4 px-6"><a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="">Xóa</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </section>
      </section>
<!-- End-Main -->
    </section>
  </body>
</html>