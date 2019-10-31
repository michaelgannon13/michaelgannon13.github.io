<template>
  <v-container id="skills" grid-list-lg>
    <v-layout row>
      <v-flex xs12 class="text-xs-center display-1 font-weight-black my-5">What I can do for you</v-flex>
    </v-layout>
    <v-layout row wrap>
      <v-flex xs12 sm12 md4 v-for="(skill, idx) in skills" :key="idx">
        <v-card>
          <v-img :src="skill.image" height="500px">
            <v-container fill-height fluid>
              <v-layout fill-height>
                <v-flex xs12 align-end flexbox>
                  <span class="headline white--text">{{ skill.name }}</span>
                </v-flex>
              </v-layout>
            </v-container>
          </v-img>
          <v-card-title primary-title>
            <div>
              <h3 class="headline mb-0">{{ skill.name }}</h3>
              <div class="card-body">
                {{ skill.description }}
              </div>
            </div>
          </v-card-title>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import Skills from '../assets/data/skills-section/skills.json'

export default {
  name: "HomeSkills",
  data() {
    return {
      skills: Skills 
    };
  }
};
</script>

<style scoped>
.card-body {
  font-weight: 300;
  font-size: 1rem;
  line-height: 1.5rem;
  min-height: 11rem;
}
</style>
