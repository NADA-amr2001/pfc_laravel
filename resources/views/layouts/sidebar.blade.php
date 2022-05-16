<ul class="list-group mb-3" style="display:inline-block;">
    <a href=" {{ route("admin.products")}} " class="list-group-item font-weight-bold list-group-item-action">
        <i class="fa fa-list"></i>
        Products
    </a>
    <a href=" {{ route("admin.orders")}} " class="list-group-item font-weight-bold list-group-item-action">
        <i class="fa fa-credit-card"></i>
        Orders
    </a>
    <a id="add_category-btn" href="/admin/products/catg" class="list-group-item font-weight-bold list-group-item-action">
        <i class="fa fa-square-plus"></i>
        Add Category
    </a>
</ul>
 <!--add category-->
 <div class="modal fade " id="add_category">
    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
        <div class="modal-content user_card">

            <div class="modal-body">



            </div>
        </div>

    </div>
</div>
