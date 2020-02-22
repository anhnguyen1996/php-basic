<ul id="error-message-list">

</ul>
<form action="#" onsubmit="return checkProductFormValueBeforeSubmit()">
  <div class="form-group">
    <label for="product-name">Tên sản phẩm:</label>
    <input type="text" class="form-control" id="product-name" placeholder="Tên sản phẩm" onchange="convertStringToLink(this)" />
  </div><br/>
  <div class="form-group">
    <label for="product-link">Link sản phẩm:</label>
    <input type="text" class="form-control" id="product-link" placeholder="Link sản phẩm" readonly />
  </div><br/>
  <div class="form-group col-md-3">
    <label for="product-price">Giá:</label>
    <input type="number" class="form-control" id="product-price" placeholder="Giá sản phẩm">
  </div><br/>
  <div class="form-group col-md-3">
    <label for="product-sale-price">Giá khuyến mãi:</label>
    <input type="number" class="form-control" id="product-sale-price" placeholder="Giá khuyến mãi sản phẩm">
  </div><br/>    
  <div class="form-group col-md-3">
    <label for="inventory-quantity">Số lượng tồn kho:</label>
    <input type="number" class="form-control" id="inventory-quantity" placeholder="Số lượng tồn kho">
  </div><br/>
  <div class="form-group col-md-3">
    <label for="product-category">Loại sản phẩm:</label>
    <select class="form-control" id="product-category">
      <option value="1">A</option>
      <option value="b">B</option>
    </select>
  </div><br/>
  <div class="form-group col-md-3">
    <label for="product-brand">Thương hiệu sản phẩm:</label>
    <select class="form-control" id="product-brand">
      <option value="1">A</option>
      <option value="b">B</option>
    </select>
  </div><br/>  
  <div class="form-group col-md-3">
    <label for="product-status">Trạng thái sản phẩm:</label>
    <select class="form-control" id="product-status">
      <option value="1">A</option>
      <option value="b">B</option>
    </select>
  </div><br/>  
  <div class="form-group col-md-3">
    <label for="product-priority">Độ ưu tiên(thứ tự):</label>
    <select class="form-control" id="product-priority">
      <option value="1">A</option>
      <option value="b">B</option>
    </select>
  </div><br/>
  <br/>
  <div class="form-group">
    <label for="content">Nội dung:</label>
    <textarea class="form-control ckeditor" rows="5" id="content"></textarea>
  </div>
  <div class="form-group">
    <label for="description">Mô tả:</label>
    <textarea class="form-control ckeditor" rows="5" id="description"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>