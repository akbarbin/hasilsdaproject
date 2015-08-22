<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'api/users/sign_in' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|xss_clean'
        ),
        array(
            'field' => 'password',
            'label' => 'Kata Sandi',
            'rules' => 'trim|required|xss_clean|callback_check_account'
        )
    ),
    'admin/portofolio/add' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'required|max_length[50]|valid_url'
        ),
        array(
            'field' => 'category_id',
            'label' => 'Kategori',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'callback_check_photo'
        )
    ),
    'admin/portofolio/edit' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'required|max_length[50]|valid_url'
        ),
        array(
            'field' => 'category_id',
            'label' => 'Kategori',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'callback_check_update_photo'
        )
    ),
    'admin/articles/add' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'category_id',
            'label' => 'Kategori',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[50]|callback_check_photo'
        )
    ),
    'admin/articles/edit' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'category_id',
            'label' => 'Kategori',
            'rules' => 'required|numeric'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[50]|callback_check_update_photo'
        )
    ),
    'admin/team/add' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[5]|max_length[30]'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Jabatan',
            'rules' => 'required|min_length[5]|max_length[30]'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_photo'
        ),
        array(
            'field' => 'job_description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'skills',
            'label' => 'Keahlian',
            'rules' => 'required|max_length[100]'
        ),
        array(
            'field' => 'facebook_url',
            'label' => 'Facebook',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'twitter_url',
            'label' => 'Twitter',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'googleplus_url',
            'label' => 'Google Pus',
            'rules' => 'max_length[50]|valid_url'
        )
    ),
    'admin/team/edit' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Jabatan',
            'rules' => 'required|min_length[5]|max_length[30]'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_update_photo'
        ),
        array(
            'field' => 'job_description',
            'label' => 'Deskripsi',
            'rules' => 'required'
        ),
        array(
            'field' => 'skills',
            'label' => 'Keahlian',
            'rules' => 'required|max_length[100]'
        ),
        array(
            'field' => 'facebook_url',
            'label' => 'Facebook',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'twitter_url',
            'label' => 'Twitter',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'googleplus_url',
            'label' => 'Google Pus',
            'rules' => 'max_length[50]|valid_url'
        )
    ),
    'admin/testimonials/add' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Jabatan',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required|min_length[5]|max_length[100]'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_photo'
        ),
        array(
            'field' => 'display',
            'label' => 'Tampil',
            'rules' => 'required'
        )
    ),
    'admin/testimonials/edit' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Jabatan',
            'rules' => 'required|max_length[30]'
        ),
        array(
            'field' => 'description',
            'label' => 'Deskripsi',
            'rules' => 'required|min_length[5]|max_length[100]'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_update_photo'
        ),
        array(
            'field' => 'display',
            'label' => 'Tampil',
            'rules' => 'required'
        )
    ),
    'admin/profile/change_password' => array(
        array(
            'field' => 'old_password',
            'label' => 'Password Lama',
            'rules' => 'trim|required|xss_clean|callback_check_old_password'
        ),
        array(
            'field' => 'password',
            'label' => 'Password Baru',
            'rules' => 'trim|required|xss_clean|matches[password_confirmation]|md5|max_length[50]'
        ),
        array(
            'field' => 'password_confirmation',
            'label' => 'Konfirmasi Password Baru',
            'rules' => 'trim|required|xss_clean|md5|max_length[50]'
        )
    ),
    'admin/profile/edit' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|apha|min_length[5]|max_length[30]'
        ),
        array(
            'field' => 'job_title',
            'label' => 'Jabatan',
            'rules' => 'max_length[30]'
        ),
        array(
            'field' => 'address',
            'label' => 'Alamat',
            'rules' => 'min_length[5]|max_length[100]'
        ),
        array(
            'field' => 'phone_number',
            'label' => 'No. Telp',
            'rules' => 'numeric|min_length[9]|max_length[15]'
        ),
        array(
            'field' => 'personal_bio',
            'label' => 'Personal Bio',
            'rules' => 'min_length[5]|max_length[50]'
        ),
    ),
    'admin/categories/add' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]|is_unique[categories.name]'
        ),
        array(
            'field' => 'type',
            'label' => 'Tipe',
            'rules' => 'required'
        )
    ),
    'admin/categories/update' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]|is_unique[categories.name]'
        ),
        array(
            'field' => 'type',
            'label' => 'Tipe',
            'rules' => 'required'
        )
    ),
    'admin/partners/add' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]'
        ),
        array(
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_photo'
        )
    ),
    'admin/partners/edit' => array(
        array(
            'field' => 'name',
            'label' => 'Nama',
            'rules' => 'required|min_length[3]|max_length[30]'
        ),
        array(
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'max_length[50]|valid_url'
        ),
        array(
            'field' => 'photo',
            'label' => 'Foto',
            'rules' => 'max_length[30]|callback_check_update_photo'
        )
    ),
    'admin/faq/add' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        )
    ),
    'admin/faq/edit' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        )
    ),
    'admin/static_pages/add' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'content',
            'label' => 'Konten',
            'rules' => 'required'
        )
    ),
    'admin/static_pages/edit' => array(
        array(
            'field' => 'title',
            'label' => 'Judul',
            'rules' => 'required|min_length[5]|max_length[50]'
        ),
        array(
            'field' => 'content',
            'label' => 'Konten',
            'rules' => 'required'
        )
    ),
    'admin/sliders/add' => array(
        array(
            'field' => 'heading',
            'label' => 'Heading',
            'rules' => 'required|min_length[3]|max_length[250]'
        ),
        array(
            'field' => 'sub_heading',
            'label' => 'Sub Heading',
            'rules' => 'required|min_length[3]|max_length[500]'
        ),
        array(
            'field' => 'link_title',
            'label' => 'Judul Link',
            'rules' => 'required|min_length[3]|max_length[50]'
        ),
        array(
            'field' => 'head_image',
            'label' => 'Head Image',
            'rules' => 'max_length[50]|callback_check_head_image'
        ),
        array(
            'field' => 'background',
            'label' => 'Background',
            'rules' => 'max_length[50]|callback_check_background'
        )
    ),
    'admin/sliders/edit' => array(
         array(
            'field' => 'heading',
            'label' => 'Heading',
            'rules' => 'required|min_length[3]|max_length[250]'
        ),
        array(
            'field' => 'sub_heading',
            'label' => 'Sub Heading',
            'rules' => 'required|min_length[3]|max_length[500]'
        ),
        array(
            'field' => 'link_title',
            'label' => 'Judul Link',
            'rules' => 'required|min_length[3]|max_length[50]'
        ),
        array(
            'field' => 'head_image',
            'label' => 'Head Image',
            'rules' => 'max_length[50]|callback_check_update_head_image'
        ),
        array(
            'field' => 'background',
            'label' => 'Background',
            'rules' => 'max_length[50]|callback_check_update_background'
        )
    )
);