<template>
  <v-container id="details">
    <v-layout column>
      <v-flex xs12 class="text-xs-center display-1 font-weight-black my-5"
        >Who am I?</v-flex
      >
      <v-flex>
        <div class="headline mt-3">Bio</div>
        <p class="subheading mt-3" v-for="bio in bios" v-bind:key="bio">
          {{ bio.text }}
        </p>
      </v-flex>
      <v-flex>
        <div class="headline mt-3">Work Experience</div>
        <p
          class="subheading mt-3"
          v-for="experience in experiences"
          v-bind:key="experience"
        >
          {{ experience.text }}
        </p>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import Experiences from "../assets/data/details-section/experience.json";
import Bios from "../assets/data/details-section/bio.json";

export default {
  name: "HomeDetails",
  data() {
    return {
      experiences: Experiences,
      bios: Bios
    };
  }
};
</script>

<style scoped>
.subheading {
  font-weight: 300;
}
</style>
