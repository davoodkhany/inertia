<template>
  <div>
    <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
    <p class="mb-8 leading-normal">Hello Davood Hey there! {{ $page.props.plan }} Foo is  Welcome to Ping CRM, a demo app designed to help illustrate how <a class="text-indigo-500 underline hover:text-orange-600" href="https://inertiajs.com">Inertia.js</a> works.</p>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {



  metaInfo()
  {
      return {


       title: 'Dashboard',

       meta: [{
           name: 'description' , content: this.description,
       }],


  }

},
   layout: Layout,

data() {
  return {
    description: "my web site app davood sample code"
  }
},

plan() {
    return this.page.props.plan
},


}


</script>
