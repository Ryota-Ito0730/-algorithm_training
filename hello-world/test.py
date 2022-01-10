# 二次元配列mを作る

s_lists = [1, 2, 3, 4, 5, 6]
u_lists = [1, 2, 3, 4, 5]
m_dictional = {}

i = 0
k = 0
for s_value in s_lists:
    m_dictional[s_value] = s_value
    i += 1

i = 0
for u_value in u_lists:
    m_dictional[i] = u_value
    i += 1

print(m_dictional)