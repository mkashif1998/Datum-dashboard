<template>
    <div class="container">
         <b-row class=" no-gutters height-self-center">
            <b-col sm="12" class=" text-center align-self-center">
               <div class="iq-error position-relative">
                     <img :src="image" class="img-fluid iq-error-img" alt="">
                     <h2 class="mb-0">Oops! This Page is Not Working.</h2>
                     <p>The requested is Internal Server Error.</p>
                     <router-link class="btn btn-primary d-inline-flex align-items-center mt-3" :to="{name: 'layout.dashboard1'}"><i class="ri-home-4-line"></i>Back to Home</router-link>
               </div>
            </b-col>
         </b-row>
   </div>
</template>
<script>
export default {
    name:'Error500',
    data(){
       return{
          image: require('../../../../assets/images/error/Datum_500.png')
       }
    }
}
</script>