<template>
  <div>
      <div v-for = "n in notification" :key="n.id">
          {{n.data.order.name}}
          {{n.data.order.quantity}}
          {{n.data.order.phonenumber}}
          {{n.data.order.location}}
          <img :src=" '/storage/uploads/medicinephoto/' + n.data.order.medicine_photo ">
          <img :src=" '/storage/uploads/doctorprescription/' + n.data.order.doctor_prescription ">
          <button v-on:click.prevent="approveNotification(n.id)" class="btn btn-info btn-sm" ><i class="fa fa-check"></i></button>
          <button v-on:click.prevent="declineNotification(n.id)" class="btn btn-danger btn-sm" ><i class="fa fa-window-close"></i></button>


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
    approveNotification(id)
      {
        axios.post('/admin/approveNotification/'+ id)
       .then((response)=>{this.notification()});
      
      },
      declineNotification(id)
      {
       axios.post('/admin/declineNotification/'+ id)
       .then((response)=>{ this.notification()});
       
      
      },
      notification()
      {
        axios.post('/admin/getnotification')
    .then((response)=>{this.notification = response.data
     });
      }

  },
created()
  {
    axios.post('/admin/getnotification')
    .then((response)=>{this.notification = response.data
     });
  }
}
</script>
