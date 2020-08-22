<template>
  <div>
      <div v-for = "n in notification" :key="n.id">
          {{n.data.order.name}}
          {{n.data.order.quantity}}
          {{n.data.order.phonenumber}}
          {{n.data.order.location}}
          <img :src=" 'uploads/medicinephoto/' + n.data.order.medicine_photo ">
          <img :src=" 'uploads/doctorprescription/' + n.data.order.doctor_prescription ">
          <button>Approve</button>
          <button>Decline</button>

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
    axios.post('/admin/getnotification')
    .then((response)=>{this.notification = response.data
     });
  }
}
</script>
