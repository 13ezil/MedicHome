<template>
    <div class="h-100">
        <div class="d-flex justify-content-center my-4 mx-4">
            <input type="text" v-model="medicine" @keyup="search()" placeholder="Enter the medicine" >
        </div>
        <div v-for="med in result" :key="med.id" class="my-4 mx-4">
            <div class="row">
                <div class="col col-4">
                   <span> {{med.name}}</span>
                </div>
                <div class="col col-2">
                    <a :href="'/selectOrder/' + med.name"><button type="button" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Select Item</button></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
data()
  {
      return{
          medicine:'',
          result:''
      }
  },
  methods:
  {
    search()
    {
        axios.post('/searchMedicine/'+ this.medicine)
        .then((response)=>{this.result = response.data})
    }
  }
}
</script>
<style scoped>
input[type=text] {
  border: none;
  border-bottom: 2px solid red;
  width:100%;
  font-size:2.1rem;
}
span{
    font-size:2.5rem;
}
</style>