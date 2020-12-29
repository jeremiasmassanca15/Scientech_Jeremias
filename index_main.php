
<style>

.gallery {
  position: relative;
  max-width: 800px;
  padding: 0 10;
}

.gallery_scroller {
   /* snap mandatory on horizontal axis  */
  scroll-snap-type: x mandatory;

  overflow-x: scroll;
  overflow-y: hidden;

  display: flex;
  align-items: center;

  height: 500px;
}


.gallery_scroller div {
   /* snap align center  */
  scroll-snap-align: center;
  margin: 10px;
  position: relative;
}

.gallery_scroller img {
  border-radius: 10px;
}

.gallery_scroller div.colored_card {
  min-width: 75%;
  min-height: 95%;
  border-radius: 10px;
 }

.gallery div.note {
  position: absolute;

  /* vertically align center */
  top:  50%;
  transform: translateY(-50%);
  left: 0;
  right: 0;

  background: rgba(0,0,0, 0.6);
  padding: 20px;
  position: absolute;

  font-size: 4em;
  color: white;
}


.gallery .btn {
  position: absolute;

  top: 50%;
  transform: translateY(-50%);

  height: 30px;
  width: 30px;

  border-radius: 2px;
  background-color: rgba(0,0,0,0.5);
  background-position: 50% 50%;
  background-repeat: no-repeat;

  z-index: 1;
}

.gallery .btn.next {
  background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>');
  right: 10px;
}

.gallery .btn.prev {
  background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Shape</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>');
  left: 10px;
}

.gallery_scroller > div.colored_card:nth-of-type(1) { background-color: #e8eaf6; }
.gallery_scroller > div.colored_card:nth-of-type(2) { background-color: #c5cae9; }
.gallery_scroller > div.colored_card:nth-of-type(3) { background-color: #9fa8da; }
.gallery_scroller > div.colored_card:nth-of-type(4) { background-color: #7986cb; }
.gallery_scroller > div.colored_card:nth-of-type(5) { background-color: #5c6bc0; }
.gallery_scroller > div.colored_card:nth-of-type(6) { background-color: #3f51b5; }
.gallery_scroller > div.colored_card:nth-of-type(7) { background-color: #3949ab; }
.gallery_scroller > div.colored_card:nth-of-type(8) { background-color: #303f9f; }
.gallery_scroller > div.colored_card:nth-of-type(9) { background-color: #283593; }
.gallery_scroller > div.colored_card:nth-of-type(10) { background-color: #1a237e; }

</style>


<p>Below is a gallery where every item is the same size and centered. </p>
<label for="alignment">Alignment:</label>
<select id="alignment_option">
  <option value="start">Start</option>
  <option value="center" selected>Center</option>
  <option value="end">End</option>
</select>



<p>
  CSS Scroll Snapping works well even when snap targets have different size or
  when they are larger than the scroller!
</p>
<div class="gallery">
  <div class="gallery_scroller">
    <div>
      <img src="https://placeimg.com/480/480/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/360/480/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/640/480/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/360/360/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/2560/960/animals/grayscale">
      <div class="note">Image is larger than container so it can be panned freely.</div>
    </div>
    <div>
      <img src="https://placeimg.com/480/480/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/360/360/animals/grayscale">
    </div>
    <div>
      <img src="https://placeimg.com/640/480/animals/grayscale">
    </div>
  </div>
</div>


<script>
document.querySelector('#alignment_option').addEventListener('change', updateAlignment);

const gallery = document.querySelector('#paginated_gallery');
const gallery_scroller = gallery.querySelector('.gallery_scroller');
const gallery_item_size = gallery_scroller.querySelector('div').clientWidth;

gallery.querySelector('.btn.next').addEventListener('click', scrollToNextPage);
gallery.querySelector('.btn.prev').addEventListener('click', scrollToPrevPage);

// For paginated scrolling, simply scroll the gallery one item in the given
// direction and let css scroll snaping handle the specific alignment.
function scrollToNextPage() {
  gallery_scroller.scrollBy(gallery_item_size, 0);
}
function scrollToPrevPage() {
  gallery_scroller.scrollBy(-gallery_item_size, 0);
}

function updateAlignment(event) {
  const alignment = event.target.value;
  for (item of gallery.querySelectorAll('.gallery_scroller > div'))
    item.style.scrollSnapAlign = alignment;

  // Currently changing scroll alignment does not force a re-snap in Chrome.
  // This is a bug: http://crbug.com/866127
  // In meantime, if desired a scroll snap can be triggered using a small
  // scripted scroll e.g.: `gallery_scroller.scrollBy(1, 0);`
}

</script>
