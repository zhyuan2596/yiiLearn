yii小白学习第一天
第一次提交

git命令之git remote：
查看当前的远程库，列出已经存在的远程分支： git remote
列出详细信息，在每一个名字后面列出远程url： git remote -v
添加一个新的远程仓库，指定一个简单的名字，一便于将来引用： git remote add 【short name】 【url】
抓取远程仓库中，本地没有的信息： git fetch 【远程仓库】

通过git remote建立远程仓库
1）makdir zhyuan
2）cd zhyuan
3）ls
4）git init 
真正初始化的即使第四步

向仓库写文件
1）echo "hello world" >> myfile
2) ls
3) git add myfile
4) git commit -m "my new file git" myfile

在本地添加一个远程仓库,并将本地的master分支跟踪到远程分支
1) git remote add origin ssh:【本地仓库的远程url】
2) git push origin master

git 删除远程已经推送过的文件或者文件夹

1.直接删除远程仓库的，本地仓库的还没有删除，可以手动删除
1) git rm -r --cached a/zhyuan :  删除a目录下的zhyuan文件
2) git commit -m "删除a目录下的zhyuan文件"  : commit
3) git push

2.先本地删除,再进行远程仓库的删除
用-r参数删除目录


