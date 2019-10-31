<template>
  <v-container id="contact" grid-list-lg>
    <v-layout row>
      <v-flex xs12 class="text-xs-center display-1 font-weight-black mt-5"
        >Contact</v-flex
      >
      <v-flex xs12 class="text-xs-center subtitle-1 font-weight-light"
        >I'm pretty active on the platforms below so if you'd like to collaborate get in touch</v-flex
      >
    </v-layout>
    <v-layout row wrap>
      <v-flex xs12 sm12 md3 v-for="contact in contacts" v-bind:key="contact">
        <a class="button" target="_blank" v-bind:href="contact.link" v-bind:key="contact">
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3 class="headline mb-0">
                  <v-icon>
                    {{ contact.icon }}
                  </v-icon>
                  {{ contact.name }}
                </h3>
                <v-flex xs12 class="text-xs-center subtitle-1 font-weight-light"
        >
                  {{ contact.text }}
                </v-flex>
              </div>
            </v-card-title>
          </v-card>
        </a>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import Contacts from "../assets/data/contacts-section/contacts.json";

export default {
  name: "HomeContact",
  data() {
    return {
      contacts: Contacts
    };
  }
};
</script>

<style scoped>
  a.button {
    text-decoration: none;
  }
</style>
