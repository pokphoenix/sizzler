@extends('category.create')

@section('editNameTh',$category->name_th)
@section('editNameEn',$category->name_en)
@section('editStatus',$category->status)
@section('editThumbnail',$category->thumbnail)
@section('editId',$category->id)
@section('editMethod')
	{{ method_field('PUT') }}
@endsection


		
