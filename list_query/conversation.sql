SELECT 
pch.datetime tanggal,
pc.name_file nama
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
pc.project_views_id = 16

