<template>
  <div>
    <div class="row alerts">
      <div v-if=alert.success class="row"><div class="col"><div class="alert success">{{alert.success}}</div></div></div>
      <div v-if=alert.errors v-for="error in errors" class="row"><div class="col"><div class="alert errorr">{{error}}</div></div></div>
    </div>

    <div class="row content">
      <form :class="{'loading': loading}" @submit="store()">
        <input :disabled=loading v-model=user.email type="email" placeholder="email">
        <button :disabled=loading type="submit">Save</button>
      </form>
    </div>
  </div>
</template>
<script>

export default {
  data() {return {loading: false, alerts: {sucess: '', errors: []}, user: {email: ''}};},
  methods: {
    store: function(){
      this.clearAlerts();
      this.loading = true;

      if(!this.isValidEmail(this.user.email)){
        this.showError(response.data.errors);
      }
      
      this.post('user', {email: this.user.email}).then(
        function (response){this.showSuccess()}, function (){this.showError(response.data.errors)}
      );
    },
    isValidEmail: function(email){return email.indexOf('@') !== -1 && email.indexOf('.') !== -1 && email.length > 5},
    clearAlerts: function(){this.alerts.success = '', this.alerts.error = ''},
    showSuccess: function(success = "Saved!"){this.alerts.success = this.getTranslatedMessage(success); this.loading = false},
    showError: function(errors = ["Sorry, but there's a problem."]){
     for(let i = 0; i < errors.length; i++){
         this.alerts.errors[] =  this.getTranslatedMessage(error); this.loading = false
     }
    };
    getTranslatedMessage: function(messageKey){return this.doesTranslationExist(messageKey) ? window.translations[messageKey] : messageKey},
    doesTranslationExist(messageKey){return messageKey && typeof window.translations[messageKey] != "undefined" && window.translations[messageKey] != null}
  }
}
</script>