<template>
  <span>
    <home-hero></home-hero>
    <home-details></home-details>
    <home-skills></home-skills>
    <home-contact></home-contact>
  </span>
</template>

<script>
import HomeHero from "@/components/HomeHero";
import HomeDetails from "@/components/HomeDetails";
import HomeSkills from "@/components/HomeSkills";
import HomeContact from "@/components/HomeContact";

export default {
  name: "home",
  components: {
    HomeHero,
    HomeDetails,
    HomeSkills,
    HomeContact
  }
};
</script>
