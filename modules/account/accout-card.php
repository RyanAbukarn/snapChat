 <?php foreach ($return_arr as $key => $account) : ?>
     <div class="card border-secondary mb-3" style="max-width: 18rem;">
         <div id="stduent-name" class="card-header"><?php echo $account['last_name'] . ", " . $account['first_name']; ?></div>
         <div class="card-body">
             <h5 id="student-email" class="card-title"><?php echo $account['email'] ?></h5>
             <h6> <?php echo ($account["admin"] == 1 ? " admin" : " not admin");
                    ?></h6>
         </div>
         <div class="card-footer bg-transparent">
             <?php $icon =  $account["admin"] == 1 ? "fas fas fa-sign-language" : "fas fa-user-tie" ?>
             <button type="button" class="btn btn-primary give-accese-or-lose" data-account-email=<?php echo $account['email'] ?> data-account-admin=<?php echo $account['admin'] ?>>
                 <i class="<?php echo $icon ?>">
                 </i>
             </button>
             <button type="button" class="btn btn-danger delete-account" data-account-email=<?php echo $account['email'] ?>><i class="fas fa-ban"></i></button>
         </div>
     </div>

     </div>
 <?php endforeach; ?>