<template>
  <v-toolbar>
    <v-toolbar-title>Michael Gannon</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items>
      <a v-bind:href=section.link class="button" 
        v-for="section in sections" v-bind:key="section">
        <v-btn text>
          <v-icon>{{section.icon}}</v-icon>
          {{section.section}}
        </v-btn>
      </a>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
import Sections from '../assets/data/nav-section/sections.json'

export default {
  name: "AppNavigation",
  data() {
    return {
      sections: Sections
    }
  }
};
</script>

<style scoped>
  a.button {
    text-decoration: none;
    margin: auto;
  }
</style>
