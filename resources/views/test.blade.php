@extends('layouts.app')


@section('content')

    <div id="app">
        <div class="row">
            <div class="col-3">
                <div class="mb-2">
                    <button class="btn btn-primary" @click="collapseAll">collapse all</button>
                    <button class="btn btn-primary ml-1" @click="expandAll">expand all</button>
                </div>
                <Tree :data="tree1data" draggable="draggable" cross-tree="cross-tree">
                    <div slot-scope="{data, store}">
                        <template v-if="!data.isDragPlaceHolder"><b v-if="data.children &amp;&amp; data.children.length" @click="store.toggleOpen(data)">{{data.open ? '-' : '+'}}&nbsp;</b><span>{{data.text}}</span></template>
                    </div>
                </Tree>
            </div>
            <div class="col-3">
                <Tree :data="tree2data" draggable="draggable" cross-tree="cross-tree">
                    <div slot-scope="{data, store}">
                        <template v-if="!data.isDragPlaceHolder"><b v-if="data.children &amp;&amp; data.children.length" @click="store.toggleOpen(data)">{{data.open ? '-' : '+'}}&nbsp;</b><span>{{data.text}}</span></template>
                    </div>
                </Tree>
                <div class="mt-2">
                    <button class="btn btn-primary" @click="addChild">Add child</button>
                </div>
            </div>
            <div class="col-3">
                <Tree class="tree3" :data="tree3data" draggable="draggable" cross-tree="cross-tree">
                    <div slot-scope="{data, store}">
                        <template v-if="!data.isDragPlaceHolder"><b v-if="data.children &amp;&amp; data.children.length" @click="store.toggleOpen(data)">{{data.open ? '-' : '+'}}&nbsp;</b><span>{{data.text}}</span></template>
                    </div>
                </Tree>
            </div>
            <div class="col-3">
                <Tree class="tree4" :data="tree4data" draggable="draggable" cross-tree="cross-tree" :indent="30" :space="0">
                    <div slot-scope="{data, store}">
                        <template v-if="!data.isDragPlaceHolder"><b v-if="data.children &amp;&amp; data.children.length" @click="store.toggleOpen(data)">{{data.open ? '-' : '+'}}&nbsp;</b><span>{{data.text}}</span></template>
                    </div>
                </Tree>
            </div>
        </div>
    </div>

@endsection

