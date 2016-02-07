SELECT 
#pc.project_views_id,
mch.comment_date tanggal ,
CONCAT(mch.id,".png") nama
FROM
project_comment pc
INNER JOIN
member_comment_head mch
ON
mch.project_comment_id = pc.id

WHERE pc.project_views_id = 16




