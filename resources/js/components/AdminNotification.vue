<template>
  <div class="mb-4">
     <div class="row d-flex justify-content-center mt-4 ml-4 mr-1">
    <div class="col-1"><big>Name</big></div>
    <div class="col-1"><big>Quantity</big></div>
    <div class="col-2"><big>Phone Number</big></div>
     <div class="col-2"><big>Location</big></div>
    <div class="col-2"><big>Medicine Photo</big></div>
    <div class="col-2"><big> Prescription</big></div>
    <div class="col-2"><big>Action</big></div>
     </div>   
      <div v-for = "n in notification" :key="n.id">
        <div class="row mt-4 ml-4 mr-1 d-flex justify-content-center">
         <div class="col-1"> {{n.data.order.name}} </div>
         <div class="col-1"> {{n.data.order.quantity}} </div>
         <div class="col-2"> {{n.data.order.phonenumber}} </div>
         <div class="col-2"> {{n.data.order.location}} </div>
         <div class="col-2" v-if="n.data.order.medicine_photo == null">No medicine photo</div>
         <div class="col-2" v-else> <img :src=" '/storage/uploads/medicinephoto/' + n.data.order.medicine_photo " width="200px" height="150px" class="border border-dark"></div>
         <div class="col-2" v-if="n.data.order.doctor_prescription == null">No doctor prescription</div>
         <div class="col-2" v-else> <img :src=" '/storage/uploads/doctorprescription/' + n.data.order.doctor_prescription " width="200px" height="150px" class="border border-dark"></div>
         <div class="col-2"> <button v-on:click.prevent="approveNotification(n.id)" class="btn btn-success btn-lg" ><i class="fa fa-check"></i></button>
          <button v-on:click.prevent="declineNotification(n.id)" class="btn btn-danger btn-lg" ><i class="fa fa-window-close"></i></button>
           <button v-on:click.prevent="getDirection(n.data.order.latlong)" class="btn btn-secondary btn-lg" ><i class="fa fa-arrow-right"></i></button>
         </div>
        </div>

      </div>
  </div>
</template>
<script>
export default {
data()
  {
    return {
      notification:[],
      latlong:'',
      url: "https://www.google.com/maps/dir/?api=1",
      origin:'',
      destination:'',
     }   
  },
methods:
  {
    approveNotification(id)
      {

      Swal.fire({
          text: 'Surely,you want to accept order?',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'No',
          showCloseButton: true,
          showLoaderOnConfirm: true
        }).then((result) => {
          if(result.value) {
              axios.post('/admin/approveNotification/'+ id)
            .then((response)=>{  Swal.fire("You have accepted order.");
            this.notifications()});    
          } 
          else {
            Swal.fire("You have cancelled the request.");
            this.notifications()
          }
        })
      },
      declineNotification(id)
      {
        Swal.fire({
          text: 'Surely,you want to decline order?',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'No',
          showCloseButton: true,
          showLoaderOnConfirm: true
        }).then((result) => {
          if(result.value) {
            axios.post('/admin/declineNotification/'+ id)
            .then((response)=>{  Swal.fire("You have declined order.");
            this.notifications()});    
          } 
          else {
            Swal.fire("You have cancelled the request.");
            this.notifications()
          }
        })
      },
      notifications()
      {
        axios.post('/admin/getnotification')
        .then((response)=>{this.notification = response.data
        });
      },
      getDirection(n)
      {
        let timerInterval
        Swal.fire({
        title: 'Wait a second...',
        timer: 2000,
        timerProgressBar: true,
        onBeforeOpen: () => 
        {
          Swal.showLoading()
          timerInterval = setInterval(() => 
          {
            const content = Swal.getContent()
            if (content) 
            {
              const b = content.querySelector('b')
              if (b) 
              {
                b.textContent = Swal.getTimerLeft()
              }
            }
            }, 100)
        },
        onClose: () => 
        {
            clearInterval(timerInterval)
        }
        }).then((result) => {})

        let latlong = n.split(",")
        this.origin = "&origin=27.7286, 85.3457"               
        this.destination = "&destination=" + latlong[0] + "," + latlong[1]
        window.location.href = new URL(this.url + this.origin + this.destination)   
        
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
