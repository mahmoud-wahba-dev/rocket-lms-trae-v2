@extends('landing_v1.layouts.app')

@section('content')
<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="basic-modal" data-overlay="#basic-modal" > Open modal </button>

<div id="basic-modal" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
  <div class="modal-dialog overlay-open:opacity-100">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Dialog Title</h3>
        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#basic-modal" >
          <span class="icon-[tabler--x] size-4"></span>
        </button>
      </div>
      <div class="modal-body">
        This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text in the
        modal, we use an inline style to set a minimum height, thereby extending the length of the overall modal and
        demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling
        will move the modal as needed.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#basic-modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="accordion divide-neutral/20 divide-y">
  <div class="accordion-item active" id="payment-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="payment-basic-collapse" aria-expanded="true" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      When is payment taken for my order?
    </button>
    <div id="payment-basic-collapse" class="accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="payment-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          Payment is taken during the checkout process when you pay for your order. The order number that appears on the
          confirmation screen indicates payment has been successfully processed.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item" id="delivery-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="delivery-basic-collapse" aria-expanded="false" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      How would you ship my order?
    </button>
    <div id="delivery-basic-collapse" class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="delivery-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          For large products, we deliver your product via a third party logistics company offering you the “room of
          choice” scheduled delivery service. For small products, we offer free parcel delivery.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item" id="cancel-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="cancel-basic-collapse" aria-expanded="false" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      Can I cancel my order?
    </button>
    <div id="cancel-basic-collapse" class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="cancel-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          Scheduled delivery orders can be cancelled 72 hours prior to your selected delivery date for full refund.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="dropdown relative inline-flex rtl:[--placement:bottom-end]">
  <button id="dropdown-header" type="button" class="dropdown-toggle btn btn-primary" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
    Dropdown header
    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
  </button>
  <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-header">
    <li class="dropdown-header gap-2">
      <div class="avatar">
        <div class="w-10 rounded-full">
          <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-2.png" alt="User Avatar" />
        </div>
      </div>
      <div>
        <h6 class="text-base-content text-base font-semibold">John Doe</h6>
        <small class="text-base-content/50 text-sm font-normal">jhon@doe.com</small>
      </div>
    </li>
    <li><a class="dropdown-item" href="#">My Profile</a></li>
    <li><a class="dropdown-item" href="#">Settings</a></li>
    <li><a class="dropdown-item" href="#">Billing</a></li>
    <li><a class="dropdown-item" href="#">FAQs</a></li>
  </ul>
</div>
<h1>hello</h1>
<button class="btn">Default</button>
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>
<button class="btn btn-accent">Accent</button>
<button class="btn btn-info">Info</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-warning">Warning</button>
<button class="btn btn-error">Error</button>

<div class="dropdown relative inline-flex" data-dropdown>
  <button id="dropdown-footer" type="button" class="dropdown-toggle btn btn-primary" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
    Dropdown footer
    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
  </button>
  <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-footer">
    <li><a class="dropdown-item" href="#">My Profile</a></li>
    <li><a class="dropdown-item" href="#">Settings</a></li>
    <li><a class="dropdown-item" href="#">Billing</a></li>
    <li><a class="dropdown-item" href="#">FAQs</a></li>
    <li class="dropdown-footer gap-2">
      <button class="btn btn-error btn-soft btn-block">Sign out</button>
    </li>
  </ul>
</div>

<div class="accordion divide-neutral/20 divide-y">
  <div class="accordion-item active" id="payment-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="payment-basic-collapse" aria-expanded="true" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      When is payment taken for my order?
    </button>
    <div id="payment-basic-collapse" class="accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="payment-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          Payment is taken during the checkout process when you pay for your order. The order number that appears on the
          confirmation screen indicates payment has been successfully processed.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item" id="delivery-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="delivery-basic-collapse" aria-expanded="false" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      How would you ship my order?
    </button>
    <div id="delivery-basic-collapse" class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="delivery-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          For large products, we deliver your product via a third party logistics company offering you the “room of
          choice” scheduled delivery service. For small products, we offer free parcel delivery.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item" id="cancel-basic">
    <button class="accordion-toggle inline-flex items-center gap-x-4 text-start" aria-controls="cancel-basic-collapse" aria-expanded="false" >
      <span class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
      <span class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
      Can I cancel my order?
    </button>
    <div id="cancel-basic-collapse" class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="cancel-basic" role="region" >
      <div class="px-5 pb-4">
        <p class="text-base-content/80 font-normal">
          Scheduled delivery orders can be cancelled 72 hours prior to your selected delivery date for full refund.
        </p>
      </div>
    </div>
  </div>
</div>
<label class="swap swap-rotate">
  <input type="checkbox" />
  <span class="swap-on icon-[tabler--sun] size-6"></span>
  <span class="swap-off icon-[tabler--moon] size-6"></span>
</label>

<!-- Small Modal -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="small-modal" data-overlay="#small-modal">Small</button>

<div id="small-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-dialog-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Dialog Title</h3>
        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#small-modal" >
          <span class="icon-[tabler--x] size-4"></span>
        </button>
      </div>
      <div class="modal-body">
        <p> This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text in the modal, we use an inline style to set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#small-modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Default Modal -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="default-modal" data-overlay="#default-modal">Default</button>

<div id="default-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Dialog Title</h3>
        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#default-modal" >
          <span class="icon-[tabler--x] size-4"></span>
        </button>
      </div>
      <div class="modal-body">
        <p> This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text in the modal, we use an inline style to set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#default-modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Large Modal -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="large-modal" data-overlay="#large-modal">Large</button>

<div id="large-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-dialog-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Dialog Title</h3>
        <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#large-modal" >
          <span class="icon-[tabler--x] size-4"></span>
        </button>
      </div>
      <div class="modal-body">
        <p> This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text in the modal, we use an inline style to set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#large-modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Extra large modal -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="extra-large-modal" data-overlay="#extra-large-modal">Extra large</button>

<div id="extra-large-modal" class="overlay modal overlay-open:opacity-100 overlay-open:duration-300 hidden" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-dialog-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Dialog Title</h3>
        <button
          type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#extra-large-modal" >
          <span class="icon-[tabler--x] size-4"></span>
        </button>
      </div>
      <div class="modal-body">
        <p> This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text in the modal, we use an inline style to set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-soft btn-secondary" data-overlay="#extra-large-modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Drawer start -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="overlay-start-example" data-overlay="#overlay-start-example">Toggle start</button>

<div id="overlay-start-example" class="overlay overlay-open:translate-x-0 drawer drawer-start hidden" role="dialog" tabindex="-1">
  <div class="drawer-header">
    <h3 class="drawer-title">Drawer Title</h3>
    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#overlay-start-example">
      <span class="icon-[tabler--x] size-5"></span>
    </button>
  </div>
  <div class="drawer-body">
    <p>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </p>
  </div>
  <div class="drawer-footer">
    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#overlay-start-example">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>

<!-- Drawer end -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="overlay-end-example" data-overlay="#overlay-end-example">Toggle end</button>

<div id="overlay-end-example" class="overlay overlay-open:translate-x-0 drawer drawer-end hidden" role="dialog" tabindex="-1">
  <div class="drawer-header">
    <h3 class="drawer-title">Drawer Title</h3>
    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#overlay-end-example">
      <span class="icon-[tabler--x] size-5"></span>
    </button>
  </div>
  <div class="drawer-body">
    <p>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </p>
  </div>
  <div class="drawer-footer">
    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#overlay-end-example">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>

<!-- Drawer top -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="overlay-top-example" data-overlay="#overlay-top-example">Toggle top</button>

<div id="overlay-top-example" class="overlay drawer overlay-open:translate-y-0 drawer-top hidden" role="dialog" tabindex="-1">
  <div class="drawer-header">
    <h3 class="drawer-title">Drawer Title</h3>
    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#overlay-top-example">
      <span class="icon-[tabler--x] size-5"></span>
    </button>
  </div>
  <div class="drawer-body">
    <p>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </p>
  </div>
  <div class="drawer-footer">
    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#overlay-top-example">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>

<!-- Drawer bottom -->

<button type="button" class="btn btn-primary" aria-haspopup="dialog" aria-expanded="false" aria-controls="overlay-bottom-example" data-overlay="#overlay-bottom-example">Toggle bottom</button>

<div id="overlay-bottom-example" class="overlay drawer overlay-open:translate-y-0 drawer-bottom hidden" role="dialog" tabindex="-1">
  <div class="drawer-header">
    <h3 class="drawer-title">Drawer Title</h3>
    <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close" data-overlay="#overlay-bottom-example">
      <span class="icon-[tabler--x] size-5"></span>
    </button>
  </div>
  <div class="drawer-body">
    <p>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </p>
  </div>
  <div class="drawer-footer">
    <button type="button" class="btn btn-soft btn-secondary" data-overlay="#overlay-bottom-example">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>

@endsection
