<template>
    <div class="container">
      <div class="form-group">
        <select class="form-control text-bold">
          <option>Select Gallery</option>
        </select>
        <p class="text-center text-danger p-t-10 text-bold">No gallery Selected</p>
      </div>
      <div class="row">
        <lightbox
          id="mylightbox"
          :images="images"
          :image_class=" 'img-fluid img-thumbnail ' "
          :album_class=" 'col' "
          :options="options">
        </lightbox>
      </div>
    </div>
</template>

<script>
import Lightbox from 'vue-simple-lightbox'

    export default {
        components: {
          Lightbox
        },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            images : [
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img1.jpg',
                title : 'Image 2'
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img2.jpg',
                title : 'Image 3'
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img3.jpg',
                title : ''
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img4.jpg',
                title : ''
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img1.jpg',
                title : 'Image 2'
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img2.jpg',
                title : 'Image 3'
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img3.jpg',
                title : ''
            },
            {
                src : 'https://cdn.rawgit.com/vrajroham/vrajroham.github.io/85d64ac5/imgs/img4.jpg',
                title : ''
            },

          ],
          options : {
            closeText : 'X',
            spinner: true,
            className: 'test',
          }
          }
        },
        methods:{


        }
    }
</script>
