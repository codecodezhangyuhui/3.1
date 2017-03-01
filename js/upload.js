function upload(url,inputObj,progressObj,imgObj){
		if(inputObj.nodeName=="INPUT"){
			this.inputObj=inputObj;
		}else if(typeof(inputObj)=="string"){
			this.inputObj=document.querySelector(inputObj);
		}
		if(progressObj.nodeName=="DIV"){
			this.progressObj=progressObj;
		}else if(typeof(progressObj)=="string"){
			this.progressObj=document.querySelector(progressObj);
		}
		if(imgObj.nodeName=="IMG"){
			this.imgObj=imgObj;
		}else if(typeof(imgObj)=="string"){
			this.imgObj=document.querySelector(imgObj);
		}
		this.type=["jpg","jpeg","png","gif","wmv"];
		this.size=1024*1024*1024;
		this.url=url;
		this.filename="file";
		this.loadStart=function(){
			
		}
	}
	upload.prototype={
		up:function(callback){
			this.getCon();
			this.callback=callback;
		},
		getCon:function(){
			var that=this;
			this.inputObj.onchange=function(){
				that.data=this.files[0];
				if(that.check()){
					that.upfile();
				}
			}
		},
		check:function(){
			var type=this.data.name.substr(this.data.name.lastIndexOf(".")+1);
			var flag=false;
			var size=this.data.size;
			if(size>this.size){
				alert("文件过大");
				return false;
			}
			for(var i=0;i<this.type.length;i++){
				if(this.type[i]==type){
					flag=true;
					return true;
				}
			}
			if(flag==false){
				alert("文件格式有误");
				return false;
			}
		},
		upfile:function(){
			var that=this;
			var formObj=new FormData();
			formObj.append(this.filename,this.data);
			var ajax=new XMLHttpRequest();
			ajax.onloadstart=function(){
				that.loadStart();
			}
			ajax.upload.onprogress=function(e){
				var total=e.total;
				var loaded=e.loaded;
				var scale=loaded/total*100;
				that.progressObj.style.width=scale+"%";
				that.progressObj.innerHTML=scale.toFixed(2)+"%";
			}
			ajax.onload=function(){
				if(ajax.response){
					var read=new FileReader();
					read.readAsDataURL(that.data);
					read.onload=function(e){
						that.imgObj.src=e.target.result;
					}
					if(that.callback){
						that.callback(ajax.response);	
					}
				}else{
					alert("上传失败");
				}	
			}
			ajax.open("post",this.url);
			ajax.send(formObj);
		}
	}