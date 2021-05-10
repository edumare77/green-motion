<template>
  <section v-if="reviews">
    <div v-for="review in reviews" :key="review.author">
     <p>{{ review.title }}</p> 
      <p>{{ review.content }}</p>
      <p>{{ review.rating.label }}</p>
    </div>
  </section>
</template>

<script>
  export default {
    props:{reviews: Array},
    data() {
      return {
        
      }
    },
    
    
  }
</script>