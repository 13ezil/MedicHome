<template>
  <div>
      <div v-for = "n in notification" :key="n.id">
          {{n.data.info}}
      </div>
  </div>
</template>
<script>
export default {
data()
  {
     return {
     notification:[],
     }   
  },
methods:
  {
    
  },
created()
  {
    axios.post('/user/getnotification')
    .then((response)=>{this.notification = response.data
     });
  }
}
</script>
