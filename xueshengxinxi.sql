SET character_set_client = gb2312; 
SET character_set_connection = gb2312; 
SET character_set_database = gb2312; 
SET character_set_results = gb2312; 
SET character_set_server = gb2312;
CREATE TABLE `xueshengxinxi` (
   `id` int(11) not null auto_increment,
   `yonghuming` varchar(50),`mima` varchar(50),`xingming` varchar(50),`xingbie` varchar(50),`nianling` varchar(50),`banji` varchar(50),`lianxifangshi` varchar(50),`youxiang` varchar(50),`beizhu` varchar(500),
   `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=2;

insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('021','001','ղķ˹','��','33','','18759640002','trodd@yahoo.com','��');insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('004','001','����','Ů','33','','13159863241','regrodd@qq.com','����');insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('005','001','��ʢ','Ů','33','','13623256544','grhtrhk@163.com','û����');insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('009','001','���ױ�','��','23','','13910215489','56547474@qq.com','��');insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('001','001','�˳�','��','33','','13769548711','43643933@qq.com','ok');



