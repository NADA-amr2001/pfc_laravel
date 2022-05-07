<!--recherche modal-->
<form action="{{ route('products.search') }}" class="d-flex mr-3">
    <div class="modal fade" id="rech">
        <div class="modal-dialog" style="margin-top: 100px; width: 400px;">
            <div class="modal-content">
                  <!-- Modal body -->
                <div class="modal-body" style="height: 90px;">
                  <div class="search-box" style="margin-left: 20px; margin-right: 20px;">
                    <input class="search-txt" type="text" name="q" placeholder="Type to search"   value="{{ request()->q ?? ''}}">
                   <button type="submit" class="btn btn-info" id="btn_search">
                     <i  class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
            </div>
        </div>
      </div>
 </form>
