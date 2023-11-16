<?php
use App\Models\Banner;
//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM banner wher status!=0 and id=1 order by created_at desc

$list =Banner::where('status','=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php" ?>

      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Thung rác xu hướng</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header ">
                  <div class="roww">
                     <div class="clo-md-6">
                  </div>
                     <div class="clo-md-6 text-right">
                     <a href="index.php?option=banner" class="btn btn-sm btn-info">
                  <i class="fa fa-rotate-left" aria-hidden="true"></i>
                  Về danh sách </a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th class="text-center" style="width:30px;">
                                    <input type="checkbox">
                                 </th>
                                 <th class="text-center" style="width:130px;">Hình ảnh</th>
                                 <th>Tên thương hiệu</th>
                                 <th>Tên link</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php if (count($list)>0):?>
                                <?php foreach($list as $items):?> 
                              <tr class="datarow">
                                 <td>
                                    <input type="checkbox">
                                 </td>
                                 <td>
                                    <img class="img-fluid" src="../public/images/banner/<?=$items->image;?>" alt=" <?=$items->image;?>">
                                 </td>
                                 <td>
                                    <div class="name">
                                    <?=$items->name;?>
                                    </div>
                                    <div class="function_style">|
                                       <a href="index.php?option=banner&cat=restore&id=<?=$items->id;?>">
                                       <i class="fas fa-window-restore"></i>
                                               Khôi phục </a> |
                                       <a href="index.php?option=banner&cat=destroy&id=<?=$items->id;?>" class="text-danger">
                                       <i class=" fas fa-trash"></i>
                                       Xoá vĩnh viễn </a>
                                    </div>
                                 </td>
                                 <td> <?=$items->link;?></td>
                              </tr>
                              <?php endforeach;?>
                           <?php endif;?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php" ?>
