<template>
   <div class="mt-5 iq-maintenance">
      <div class="container-fluid p-0">
         <div class="row no-gutters">
            <div class="col-sm-12 text-center">
               <div class="iq-maintenance">
                  <img :src="image" class="img-fluid" alt="">
                  <h3 class="mt-4 mb-2">Site Currently Under Maintenance</h3>
                  <p class="mb-2">Please check back in sometime.</p>
                  <p>Contact with <a href="#">dummy@example.com</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script>
export default {
    name:'Maintainance',
    data(){
       return {
         image: require('../../../assets/images/error/maintenance.png')    
       }
   }
}
</script>
