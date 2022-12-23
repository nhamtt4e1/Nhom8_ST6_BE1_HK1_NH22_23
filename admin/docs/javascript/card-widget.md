---
layout: page
title: Card Widget Plugin
---

The card widget plugin provides the functionality for collapsing, expanding and removing a card. 

### Usage

This plugin can be activated as a jQuery plugin or using the data API. 

#### Data API

This plugin provides two `data-api` attributes. Any element using one of the following attributes should be placed within the `.card-tools` div, which is usually in the card header. For more information about the [card HTML structure]({% link components/cards.md %}), visit the card component documentation 

##### `data-card-widget="collapse"`

This attribute, when attached to a button, allows the box to be collapsed/expanded when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Collapsible Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Collapsible Card Example</h3>
    <div class="card-tools">
      <!-- Collapse Button -->
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>

##### `data-card-widget="remove"`

This attribute, when attached to a button, allows the box to be removed when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Removable Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Removable Card Example</h3>
    <div class="card-tools">
      <!-- Remove Button -->
      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>

##### `data-card-widget="maximize"`

This attribute, when attached to a button, allows the box to be maximize/minimize when clicked. 

<div class="row">
  <div class="col-12 col-md-4">
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Maximizable Card Example</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
      </div>
      <div class="card-body">
        The body of the card
      </div>
    </div>
  </div>
  <div class="col-12 col-md-8" markdown="1">
```html
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Maximizable Card Example</h3>
    <div class="card-tools">
      <!-- Maximize Button -->
      <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    The body of the card
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
```
{: .max-height-300}
  </div>
</div>


###### jQuery
{: .text-bold }
To activate any button using jQuery, you must provide the removeTrigger and collapseTrigger options. Otherwise, the plugin will assume the default `data-card�ԸP��ͅJ��ƫ�"�C�����wM8ë���mp^樏pA@��<U#��RlH�8�j���i�B	�� p�X�+�|��E�\��X���lx�4�2%��}�������9`n���su��E�`�}�#}G@a��ٺ��2)t�S6��P�y����2өϻ4a9Z�x
F�N��T�j�g���!BsN�u
�6.L��<Ee���y:�Q>L�M����^QWAU�#��߻��9�� �A������;~��Ƣa��=��l9��Ĭ�ld���{T��ҭG��;��_+�=/�5�3�U�Q��3%��2~��r�Wx1�<욄\�<3�M�����j�e.��
|C����9hΡ�=�����~�^�앆j�3ۋWHMgAg�MF@;��'08�C�~��W.Ψ�d�|;�Nz����^��La*����F��P���O����4W9��Q��S��̹���zWW���d!��5z1�
 \w�+�f-ɭ�h�\�С��7�%	C��Q��bդ|�W���]�+H�}T���n���C�#��2`�=�H3Ʈ���7��"gQ'k�C��H!�P���Id�F���R���3���������G����l�K����p�t0aJEGϿ�̶Z*)`�ʳ|�Ø˨
�o#?�[�G�����y�LS�2M�FRg�G$A��u�4%G��}o��:T��/�x����Qjp�)��N�Y��+<�#���X3�=��B���b��k�ϭ�����I-�ZG��C*䷛��rЎ���ǖ/-����/9��qbNR1X.���uͭ�
Ȅ���Q�Cen�:�
���DM.�y�uR�z�i��a�팔�}� ��K'!�����=q���^}��(���|�t��{�s#�aN��2'�\�L���n}z���k���a���ж�&]�5��^��[J�U��\�P(_���]�;��4�i~)��b��+'3e��2ח�9��;���d�ӕY����V��������e��.��r�_j)���u�Z��{�d\�7�wF�o�@\���f#�I�|��\�c&�j�]��zx����(�i7҄�(�Q��)��?�GD�f/���9 =��*
g���Mry�$�$[8q���f�%�ί���u�����+ȗKM�v���7�������8�ߏ�J�	ڄݒ��{H�B��.M��R�x��s�<�{�Fr�ލʼПCS�I����=�;���"u|�K�~������Z�2��ŋ���J7\���o
62�,��Q(���M�[M{5�"T  �7T"76�۱4�+s��`�҇}#�H��Z�E#6R%���n��YC��+���!�0��T��:]��0|��n�@'R��RE��r��\��R�`C��L)Xa~.�f����b�v�O	����^踳���_�Ǌ�)�������N�5:%1t7�-�e�o�'xSIi����?#��cs���ls�[^����ۼX�#J�j��=n3J>���i)?�&X��u�&�@�X�	���v�e��,���$F��jr��M���)ր���UD�6�y�ث+�ӟ#ی\�'ܦ�d�f5�#(;i����K��Y�Q7�"'� �8�Ve|Tg�<�̙O;2��7#��z���H��(h5��m�.�\$-p��Vu<��Ey4����l�D��ie�X
�Db�_Ł�F-q"�t\����B7�����.9[��mj���!�<�I��<���Z�����a\k�i\�o�!��b�y)4��M�fe��vh��6C��tgQ�����q����}s0�PF�Q�Ն�W��yWp���'��a�bQ���