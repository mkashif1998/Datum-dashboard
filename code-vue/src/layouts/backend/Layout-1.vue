<template>
  <div>
    <Loader/>
    <div class="wrapper">
      <SidebarStyle variant='' />
      <HeaderStyle1/>
      <div class="content-page">
        <transition name="router-anim">
          <router-view/>
        </transition>
      </div>
    </div>
    <FooterStyle />
  </div>
</template>
<script>
import Loader from '@/components/loader/Loader'
import SidebarStyle from "@/components/partials/backend/SidebarStyle/SidebarStyle";
import HeaderStyle1 from "@/components/partials/backend/HeaderStyle/HeaderStyle1";
import FooterStyle from "@/components/partials/backend/FooterStyle/FooterStyle";
export default {
  name: 'Layout-2',
  components: {
    HeaderStyle1,
    FooterStyle,
    SidebarStyle,
    Loader
  }
  
}
</script>
<style>
</style>
