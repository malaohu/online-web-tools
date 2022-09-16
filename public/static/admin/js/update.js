/**
 * 检查版本更新
 * @type {string}
 */

let html = `
<div class="modal fade" id="versionUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">提示</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                
                <p>
                    发现新的版本: <b id="newVersion">v1.23</b>
                </p>
                <p>
                    永不提示请删除: static/admin/js/update.js 中代码
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="noUpdate" data-dismiss="modal">关闭</button>
                <a type="button" href="http://www.qadmin.net/bsadmin.html" target="_blank" class="btn btn-primary">去看看</a>
            </div>
        </div>
    </div>
</div>
`

let noUpdate = sessionStorage.getItem('noUpdate');
if(noUpdate!=1){
    $.get(config.official+"/api/version/qadmin",res=>{
        if(res.code==1){
            if(config.version<res.data.v){

                layer.confirm('发现新的版本: <b id="newVersion">'+res.data.v+'</b>？<p>\n                    永不提示请删除: static/admin/js/update.js 中代码\n                </p>', {
                    btn: ['关闭','去看看'] //按钮
                }, function(){
                    sessionStorage.setItem('noUpdate',1);
                    console.log('不在提示');
                    layer.closeAll()
                }, function(){
                    window.location.href = 'http://www.qadmin.net/';
                    layer.closeAll()
                });
            }
        }
    })
}


