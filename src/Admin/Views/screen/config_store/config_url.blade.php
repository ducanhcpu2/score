<div class="card">
  <div class="card-body table-responsive">
   <table class="table table-hover box-body text-nowrap table-bordered">
     <tbody>

      <tr>
        <td>{{ trans('env.SUFFIX_URL') }}</td>
        <td><a href="#" class="updateInfo editable editable-click" data-name="SUFFIX_URL" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.SUFFIX_URL') }}" data-value="{{ sc_config_admin('SUFFIX_URL', $storeId) }}" data-original-title="" title=""></a></td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_SHOP') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_SHOP" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_SHOP') }}" data-value="{{ sc_config_admin('PREFIX_SHOP', $storeId) }}" data-original-title="" title=""></a></td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_PRODUCT') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_PRODUCT" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_PRODUCT') }}" data-value="{{ sc_config_admin('PREFIX_PRODUCT', $storeId) }}" data-original-title="" title=""></a>/name-of-product{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CATEGORY') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CATEGORY" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CATEGORY') }}" data-value="{{ sc_config_admin('PREFIX_CATEGORY', $storeId) }}" data-original-title="" title=""></a>/name-of-category{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>
      
      <tr>
        <td>{{ trans('env.PREFIX_SUB_CATEGORY') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_SUB_CATEGORY" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_SUB_CATEGORY') }}" data-value="{{ sc_config_admin('PREFIX_SUB_CATEGORY', $storeId) }}" data-original-title="" title=""></a>/name-of-category{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_BRAND') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_BRAND" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_BRAND') }}" data-value="{{ sc_config_admin('PREFIX_BRAND', $storeId) }}" data-original-title="" title=""></a>/name-of-brand{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_SUPPLIER') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_SUPPLIER" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_SUPPLIER') }}" data-value="{{ sc_config_admin('PREFIX_SUPPLIER', $storeId) }}" data-original-title="" title=""></a>/name-of-supplier{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_SEARCH') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_SEARCH" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_SEARCH') }}" data-value="{{ sc_config_admin('PREFIX_SEARCH', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CONTACT') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CONTACT" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CONTACT') }}" data-value="{{ sc_config_admin('PREFIX_CONTACT', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_NEWS') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_NEWS" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_NEWS') }}" data-value="{{ sc_config_admin('PREFIX_NEWS', $storeId) }}" data-original-title="" title=""></a>/name-of-blog-news{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_MEMBER') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_MEMBER" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_MEMBER') }}" data-value="{{ sc_config_admin('PREFIX_MEMBER', $storeId) }}" data-original-title="" title=""></a>/page-name-member{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>         

      <tr>
        <td>{{ trans('env.PREFIX_MEMBER_ORDER_LIST') }}</td>
        <td>https://your-domain.com/{{ sc_config_admin('PREFIX_MEMBER', $storeId) }}/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_MEMBER_ORDER_LIST" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_MEMBER_ORDER_LIST') }}" data-value="{{ sc_config_admin('PREFIX_MEMBER_ORDER_LIST', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>    

      <tr>
        <td>{{ trans('env.PREFIX_MEMBER_CHANGE_PWD') }}</td>
        <td>https://your-domain.com/{{ sc_config_admin('PREFIX_MEMBER', $storeId) }}/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_MEMBER_CHANGE_PWD" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_MEMBER_CHANGE_PWD') }}" data-value="{{ sc_config_admin('PREFIX_MEMBER_CHANGE_PWD', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_MEMBER_CHANGE_INFO') }}</td>
        <td>https://your-domain.com/{{ sc_config_admin('PREFIX_MEMBER', $storeId) }}/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_MEMBER_CHANGE_INFO" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_MEMBER_CHANGE_INFO') }}" data-value="{{ sc_config_admin('PREFIX_MEMBER_CHANGE_INFO', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CMS_CATEGORY') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CMS_CATEGORY" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CMS_CATEGORY') }}" data-value="{{ sc_config_admin('PREFIX_CMS_CATEGORY', $storeId) }}" data-original-title="" title=""></a>/name-of-cms-categoyr{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CMS_ENTRY') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CMS_ENTRY" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CMS_ENTRY') }}" data-value="{{ sc_config_admin('PREFIX_CMS_ENTRY', $storeId) }}" data-original-title="" title=""></a>/name-of-entry-cms{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CART_WISHLIST') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CART_WISHLIST" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CART_WISHLIST') }}" data-value="{{ sc_config_admin('PREFIX_CART_WISHLIST', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>

      <tr>
        <td>{{ trans('env.PREFIX_CART_COMPARE') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CART_COMPARE" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CART_COMPARE') }}" data-value="{{ sc_config_admin('PREFIX_CART_COMPARE', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr>          

      <tr>
        <td>{{ trans('env.PREFIX_CART_DEFAULT') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CART_DEFAULT" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CART_DEFAULT') }}" data-value="{{ sc_config_admin('PREFIX_CART_DEFAULT', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr> 

      <tr>
        <td>{{ trans('env.PREFIX_CART_CHECKOUT') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_CART_CHECKOUT" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_CART_CHECKOUT') }}" data-value="{{ sc_config_admin('PREFIX_CART_CHECKOUT', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr> 

      <tr>
        <td>{{ trans('env.PREFIX_ORDER_SUCCESS') }}</td>
        <td>https://your-domain.com/<a href="#" class="editable-required editable editable-click" data-name="PREFIX_ORDER_SUCCESS" data-type="text" data-pk="" data-source="" data-url="{{ sc_route('admin_config.update') }}" data-title="{{ trans('env.PREFIX_ORDER_SUCCESS') }}" data-value="{{ sc_config_admin('PREFIX_ORDER_SUCCESS', $storeId) }}" data-original-title="" title=""></a>{{ sc_config_admin('SUFFIX_URL', $storeId) }}</td>
      </tr> 

     </tbody>
   </table>
  </div>
</div>