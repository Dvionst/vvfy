SELECT tanggal, nama, original

FROM 


(SELECT 

pch.datetime tanggal,
pc.name_file nama,
pc.name_file original,
pc.description

FROM
project p
INNER JOIN
project_comment_head pch
ON 
p.id = pch.project_id
INNER JOIN
project_comment pc
ON
pc.head_project_id =  pch.id
WHERE
pc.project_views_id =19

) table1

UNION


(
SELECT 


mch.comment_date tanggal ,
CONCAT(mch.id,".png") nama,
pc.name_file AS original

FROM
project_comment pc
INNER JOIN
member_comment_head mch
ON
mch.project_comment_id = pc.id

WHERE pc.project_views_id = 19

)

ORDER BY tanggal ASC